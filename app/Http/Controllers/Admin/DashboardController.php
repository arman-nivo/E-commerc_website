<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use App\Models\Order;
use App\Models\User;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Courierapi;
use App\Models\OrderStatus;
use Carbon\Carbon;
use Toastr;
use Auth;
use DB;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth')->except(['locked','unlocked']);
    }
    public function dashboard(Request $request, $slug = 'all')
    {
        // Basic counts
        $total_order      = Order::count();
        $total_processing = Order::where('order_status', 2)->count();
        $total_unpaid     = Order::where('order_status', 6)->count();
        $total_pending    = Order::where('order_status', 1)->count();
        $total_canceled   = Order::where('order_status', 8)->count();
        $total_completed  = Order::where('order_status', 9)->count();

        /**
         *  Order filtering by slug
         */
        if ($slug == 'all') {

            $order_status = (object) [
                'name' => 'All',
                'orders_count' => $total_order,
            ];

            $show_data = Order::with(['shipping', 'status', 'notes'])->latest();

            if ($request->keyword) {
                $keyword = $request->keyword;
                $show_data->where(function ($query) use ($keyword) {
                    $query->where('invoice_id', 'LIKE', "%$keyword%")
                        ->orWhereHas('shipping', function ($sub) use ($keyword) {
                            $sub->where('phone', 'LIKE', "%$keyword%");
                        });
                });
            }

            $show_data = $show_data->paginate(10);
        } else {

            $order_status = OrderStatus::where('slug', $slug)
                ->withCount('orders')
                ->firstOrFail();

            $show_data = Order::with(['shipping', 'status', 'notes'])
                ->where('order_status', $order_status->id)
                ->latest()
                ->paginate(10);
        }


        /**
         *  Users & Courier Settings
         */
        $users = User::all();

        $steadfast   = Courierapi::where(['status' => 1, 'type' => 'steadfast'])->first();
        $pathao_info = Courierapi::where(['status' => 1, 'type' => 'pathao'])
            ->select('id', 'type', 'url', 'token', 'status')
            ->first();


        /**
         *  Pathao API Requests
         */
        $pathaocities = [];
        $pathaostore  = [];

        if ($pathao_info) {
            try {
                // City list
                $response = Http::get("{$pathao_info->url}/api/v1/countries/1/city-list");
                if ($response->successful()) {
                    $pathaocities = $response->json();
                }

                // Store info
                $response2 = Http::withHeaders([
                    'Authorization' => 'Bearer ' . $pathao_info->token,
                    'Content-Type' => 'application/json',
                ])->get("{$pathao_info->url}/api/v1/stores");

                if ($response2->successful()) {
                    $pathaostore = $response2->json();
                }
            } catch (\Exception $e) {
                // Prevent system crash on API failure
                $pathaocities = [];
                $pathaostore  = [];
            }
        }


        return view('backEnd.admin.dashboard',
            compact(
                'total_order',
                'total_processing',
                'total_unpaid',
                'total_pending',
                'total_canceled',
                'total_completed',
                'show_data',
                'order_status',
                'users',
                'steadfast',
                'pathaostore',
                'pathaocities'
            )
        );
    }


    public function changepassword()
    {
        return view('backEnd.admin.changepassword');
    }
    public function newpassword(Request $request)
    {
        $this->validate($request, [
            'old_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required_with:new_password|same:new_password|'
        ]);

        $user = User::find(Auth::id());
        $hashPass = $user->password;

        if (Hash::check($request->old_password, $hashPass)) {

            $user->fill([
                'password' => Hash::make($request->new_password)
            ])->save();

            Toastr::success('Success', 'Password changed successfully!');
            return redirect()->route('dashboard');
        } else {
            Toastr::error('Failed', 'Old password not match!');
            return back();
        }
    }
    public function locked()
    {
        // only if user is logged in

        Session::put('locked', true);
        return view('backEnd.auth.locked');


        return redirect()->route('login');
    }

    public function unlocked(Request $request)
    {
        if (!Auth::check())
            return redirect()->route('login');
        $password = $request->password;
        if (Hash::check($password, Auth::user()->password)) {
            Session::forget('locked');
            Toastr::success('Success', 'You are logged in successfully!');
            return redirect()->route('dashboard');
        }
        Toastr::error('Failed', 'Your password not match!');
        return back();
    }
}

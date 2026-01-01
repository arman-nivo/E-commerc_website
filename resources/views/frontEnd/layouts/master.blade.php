<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>@yield('title') - {{$generalsetting->name}}</title>
        <!-- App favicon -->
<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '2355381278153504');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=2355381278153504&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
        <link rel="shortcut icon" href="{{asset($generalsetting->favicon)}}" alt="Super Ecommerce Favicon" />
        <meta name="author" content="Super Ecommerce" />
        <link rel="canonical" href="" />
        @stack('seo')
        @stack('css')
        <link rel="stylesheet" href="{{asset('frontEnd/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{asset('frontEnd/css/animate.css')}}" />
        <link rel="stylesheet" href="{{asset('frontEnd/css/all.min.css')}}" />
        <link rel="stylesheet" href="{{asset('frontEnd/css/owl.carousel.min.css')}}" />
        <link rel="stylesheet" href="{{asset('frontEnd/css/owl.theme.default.min.css')}}" />
        <link rel="stylesheet" href="{{asset('frontEnd/css/mobile-menu.css')}}" />
        <link rel="stylesheet" href="{{asset('frontEnd/css/select2.min.css')}}" />
        <!-- toastr css -->
        <link rel="stylesheet" href="{{asset('backEnd/assets/css/toastr.min.css')}}" />

        <link rel="stylesheet" href="{{asset('frontEnd/css/wsit-menu.css')}}" />
        <link rel="stylesheet" href="{{asset('frontEnd/css/style.css')}}" />
        <link rel="stylesheet" href="{{asset('frontEnd/css/responsive.css')}}" />
        <link rel="stylesheet" href="{{asset('frontEnd/css/main.css')}}" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <meta name="facebook-domain-verification" content="38f1w8335btoklo88dyfl63ba3st2e" />
        <style>
            .float{
            	position:fixed;
            	color:white;
            	width:60px;
            	height:60px;
            	bottom:40px;
            	left:20px;
            	background-color:#25d366;
            	color:#FFF;
            	border-radius:50px;
            	text-align:center;
                font-size:30px;
            	box-shadow: 2px 2px 3px #999;
                z-index:9999;
            }

            .my-float{
            	margin-top:16px;
            }
            /* Media query to hide the .float class on screens 768px and smaller */
            @media (max-width: 767px) {
                .float {
                    display: none;
                }
            }

            /* cartbar css  */
            /* Overlay */
.cart-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.5);
    display: none;
    z-index: 999;
}

/* Sidebar */
.cart-sidebar {
    position: fixed;
    top: 0;
    right: -400px; /* hidden by default */
    width: 400px;
    height: 100%;
    background: #fff;
    box-shadow: -3px 0 10px rgba(0,0,0,0.2);
    transition: right 0.3s ease;
    z-index: 1000;
    overflow-y: auto;
}

.cart-sidebar.open {
    right: 0;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.cart-sidebar-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px;
    border-bottom: 1px solid #ddd;
}

.cart-item {
    display: flex;
    gap: 10px;
    padding: 22px 10px;
    border-bottom: 1px solid #eee;
}

.cart-item img {
    width: 60px;
    height: 60px;
    object-fit: cover;
}

.cart-item-details {
    display: flex;
    flex: 1;
    justify-content: space-between;
    align-items: center;
    flex-direction: row;
}

.cart-toggle-btn {
    position: relative;
    background: #000;
    color: #fff;
    padding: 8px 12px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
strong {
    font-weight: 900;
    padding: 21px 15px !important;
    font-size: 18px;
}


        </style>
        {{-- cartbar js --}}
        <script>
         document.addEventListener('DOMContentLoaded', function() {
    const cartToggle = document.getElementById('cart-toggle');
    const cartSidebar = document.getElementById('cart-sidebar');
    
    // Create overlay dynamically
    const overlay = document.createElement('div');
    overlay.classList.add('cart-overlay');
    document.body.appendChild(overlay);

    const closeCart = document.getElementById('close-cart');

    cartToggle.addEventListener('click', () => {
        cartSidebar.classList.add('open');
        overlay.style.display = 'block';
    });

    closeCart.addEventListener('click', () => {
        cartSidebar.classList.remove('open');
        overlay.style.display = 'none';
    });

    overlay.addEventListener('click', () => {
        cartSidebar.classList.remove('open');
        overlay.style.display = 'none';
    });
});


        </script>


        @foreach($pixels as $pixel)
        <!-- Facebook Pixel Code -->
        <script>
            !(function (f, b, e, v, n, t, s) {
                if (f.fbq) return;
                n = f.fbq = function () {
                    n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments);
                };
                if (!f._fbq) f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = "2.0";
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s);
            })(window, document, "script", "https://connect.facebook.net/en_US/fbevents.js");
            fbq("init", "{{{$pixel->code}}}");
            fbq("track", "PageView");
        </script>
        <noscript>
            <img height="1" width="1" style="display: none;" src="https://www.facebook.com/tr?id={{{$pixel->code}}}&ev=PageView&noscript=1" />
        </noscript>
        <!-- End Facebook Pixel Code -->
        @endforeach

        @foreach($gtm_code as $gtm)
        <!-- Google tag (gtag.js) -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-{{ $gtm->code }}');</script>
        <!-- End Google Tag Manager -->
        @endforeach
    </head>
    <body class="gotop">
        @php $subtotal = Cart::instance('shopping')->subtotal(); @endphp
       
       
        <div class="mobile-menu">
                <div class="mobile-menu-logo">
                    <div class="logo-image">
                        <img src="{{asset($generalsetting->dark_logo)}}" alt="" />
                    </div>
                    <div class="mobile-menu-close">
                        <i class="fa fa-times"></i>
                    </div>
                </div>
                <ul class="first-nav">
                    @foreach($menucategories as $scategory)
                    <li class="parent-category">
                        <a href="{{url('category/'.$scategory->slug)}}" class="menu-category-name">
                            <img src="{{asset($scategory->image)}}" alt="" class="side_cat_img" />
                            {{$scategory->name}}
                        </a>
                        @if($scategory->subcategories->count() > 0)
                        <span class="menu-category-toggle">
                            <i class="fa fa-chevron-down"></i>
                        </span>
                        @endif
                        <ul class="second-nav" style="display: none;">
                            @foreach($scategory->subcategories as $subcategory)
                            <li class="parent-subcategory">
                                <a href="{{url('subcategory/'.$subcategory->slug)}}" class="menu-subcategory-name">{{$subcategory->subcategoryName}}</a>
                                @if($subcategory->childcategories->count() > 0)
                                <span class="menu-subcategory-toggle"><i class="fa fa-chevron-down"></i></span>
                                @endif
                                <ul class="third-nav" style="display: none;">
                                    @foreach($subcategory->childcategories as $childcat)
                                    <li class="childcategory"><a href="{{url('products/'.$childcat->slug)}}" class="menu-childcategory-name">{{$childcat->childcategoryName}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    @endforeach
                </ul>
        </div>


        <header id="navbar_top">
		  

            <div class="mobile-header sticky">
                <div class="mobile-logo">
                    <div class="menu-bar">
                        <a class="toggle">
                            <i class="fa-solid fa-bars"></i>
                        </a>
                    </div>
                    <div class="menu-logo">
                        <a href="{{route('home')}}"><img src="{{asset($generalsetting->dark_logo)}}" alt="" /></a>
                    </div>
                    <div class="menu-bag">
                        <p class="margin-shopping">
                            <i class="fa-solid fa-cart-shopping text-white"></i>
                            <span class="mobilecart-qty">{{Cart::instance('shopping')->count()}}</span>
                        </p>
                    </div>
                </div>
            </div>

            

            <div class="mobile-search">
                <form action="{{route('search')}}">
                    <input type="text" placeholder="Search Product ... " value="" class="msearch_keyword msearch_click" name="keyword" />
                    <button><i data-feather="search"></i></button>
                </form>
                <div class="search_result"></div>
            </div>

            <div class="main-header">
                <!-- header to end -->
            
    {{-- sidebar --}}
    {{-- <div id="menu-sidebar" class="bg-white text-dark ">
            <div class="bg-warning mt-4 d-flex justify-content-center align-items-center rounded-circle" style="width: 45px; height: 45px; margin-left: 4px;">
                    <i class="fa-solid fa-bars text-white fs-4 fw-semibold"></i>
            </div>

          
            <ul class="first-nav">
                    @foreach($menucategories as $scategory)
                    <li class="">
                        <a href="{{url('category/'.$scategory->slug)}}" class="">
                            <img src="{{asset($scategory->image)}}" alt="" class="" />
                            {{$scategory->name}}
                        </a>
                        @if($scategory->subcategories->count() > 0)
                        <span class="">
                            <i class="fa fa-chevron-down"></i>
                        </span>
                        @endif
                        <ul class="" >
                            @foreach($scategory->subcategories as $subcategory)
                            <li class="">
                                <a href="{{url('subcategory/'.$subcategory->slug)}}" class="">{{$subcategory->subcategoryName}}</a>
                                @if($subcategory->childcategories->count() > 0)
                                <span class=""><i class="fa fa-chevron-down"></i></span>
                                @endif
                                <ul class="third-nav" >
                                    @foreach($subcategory->childcategories as $childcat)
                                    <li class=""><a href="{{url('products/'.$childcat->slug)}}" class="">{{$childcat->childcategoryName}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    @endforeach
                </ul>

    </div> --}}

<!-- Sidebar -->
{{-- <div id="menu-sidebar" class="bg-white text-dark">

    <div  class="bg-warning mt-4 d-flex justify-content-center align-items-center rounded-circle"
         style="width: 45px; height: 45px; margin-left: 4px;">
        <i class="fa-solid fa-bars text-white fs-4 fw-semibold"></i>
    </div> 

    <ul class="first-nav list-unstyled mt-2">
        @foreach($menucategories as $scategory)
            <li class="d-block">
                <a href="{{url('category/'.$scategory->slug)}}" class="d-flex align-items-center gap-2">
                    <img src="{{asset($scategory->image)}}" alt="" style="width: 30px; height: 30px;">
                    <span class="category-name">{{$scategory->name}}</span>
                </a>

                @if($scategory->subcategories->count() > 0)
                    <ul class="second-nav list-unstyled ms-4">
                        @foreach($scategory->subcategories as $subcategory)
                            <li>
                                <a href="{{url('subcategory/'.$subcategory->slug)}}" class="d-flex align-items-center gap-2 subcategory-link">
                                    
                                    <i class="subMenuIcon fa-solid fa-folder-open text-warning"></i>
                                    {{$subcategory->subcategoryName}}
                                </a>

                                @if($subcategory->childcategories->count() > 0)
                                    <ul class="third-nav list-unstyled ms-4">
                                        @foreach($subcategory->childcategories as $childcat)
                                            <li>
                                                <a href="{{url('products/'.$childcat->slug)}}" class="d-flex align-items-center gap-2 child-link">
                                                    <i  class="subSubMenuIcon fa-solid fa-file-lines text-warning"></i>
                                                    {{$childcat->childcategoryName}}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                @endif
            </li>
        @endforeach
    </ul>
</div> --}}



            <div class="header  py-1 border-bottom" style="background: #000; color: #fff;">
                <div class="manupadding">
                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                <!-- Logo -->
                <div class="main-logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset($generalsetting->dark_logo) }}" alt="Logo">
                    </a>
                </div>

            <!-- Categories -->
            {{-- <div  style="margin-left: 20px">
                <button id="toggle-sidebar-btn" style="color: #fff; font-size: 12px" class="btn btn-warning align-items-center fw-semibold px-3 py-2 rounded-pill">
                <i class="fa-solid fa-list me-2"></i> ALL CATEGORIES
                </button>

            </div> --}}

            <!-- Search Bar -->
            <div>
                <style>
                    .manupadding{
                                margin-right: 3rem !important;
                                margin-left: 2rem !important;
                                padding: 8px 0px;

                    }
                    .manulink>a, .manulink>a:hover, .manulink>a:hover, .manulink>a:focus{
                        color: #ffffff;
                        text-decoration: none;
                        outline-offset: 0;
                        outline: 0;
                    }
                </style>
                <li class="menu-links d-flex align-items-center gap-3 flex-wrap manulink">
                    <a href="{{ route('home') }}" style="{{ request()->routeIs('home') ? 'color:#40b9eb;' : '' }}" class="{{ request()->routeIs('home') ? 'fw-bold' : '' }}">Home</a>   
                    <a href="{{ route('shop') }}" style="{{ request()->routeIs('shop') ? 'color:#40b9eb;' : '' }}" class="{{ request()->routeIs('shop') ? 'fw-bold' : '' }}">All Products</a>

                    {{-- <a href="{{ route('brands') }}" style="{{ request()->routeIs('brands') ? 'color:#40b9eb;' : '' }}" class="{{ request()->routeIs('brands') ? 'fw-bold ' : '' }}">All Brands</a> --}}

                    <a href="{{ route('hotdeals') }}" style="{{ request()->routeIs('hotdeals') ? 'color:#40b9eb;' : '' }}" class="{{ request()->routeIs('hotdeals') ? 'fw-bold ' : '' }}">Hot Deals</a>

                    <a href="{{ route('flashsales') }}" style="{{ request()->routeIs('flashsales') ? 'color:#40b9eb;' : '' }}" class="{{ request()->routeIs('flashsales') ? 'fw-bold ' : '' }}">Flash Sales</a>

                    <a href="{{ route('contact') }}" style="{{ request()->routeIs('contact') ? 'color:#40b9eb;' : '' }}" class="{{ request()->routeIs('contact') ? 'fw-bold ' : '' }}">Contact</a>
                    
                </li>
                
             </div>

            <div class="main-search flex-grow-1 mx-4" style="max-width: 350px;">
                <form action="{{ route('search') }}" class="d-flex">
                    <input type="text" 
                           placeholder="Search Product..." 
                           class="form-control search_keyword search_click p-3 fs-4" 
                           name="keyword" />
                    <button type="submit" class="btn btn-warning ms-2">
                        <i class="fa fa-search text-white fs-5 fw-semibold"></i>
                    </button>
                </form>
                <div class="search_result"></div>
            </div>

            <!-- Track Order -->
            <div  style="display: flex;flex-direction: row;gap: 29px; align-items: center;">
                <a title="Track Order" href="{{ route('customer.order_track') }}" class="d-flex align-items-center text-white">
                    <i class="fa fa-truck fw-semibold fs-5 me-2"></i>
                </a>

                <div class="cart-dialog" id="cart-qty">
                    <!-- Cart Sidebar Toggle Button -->
                    <!-- Cart Toggle Button -->
<button id="cart-toggle" class="cart-toggle-btn">
    <i class="fa-solid fa-cart-shopping fs-5 fw-semibold"></i>
    <span>{{ Cart::instance('shopping')->count() }}</span>
</button>

<!-- Cart Sidebar -->
<div class="cart-sidebar" id="cart-sidebar">
    <div class="cart-sidebar-header">
        <h4 class="text-black">Shopping cart</h4>
        <button id="close-cart"><i class="fa-solid fa-xmark"></i></button>
    </div>
    <div class="cart-sidebar-content"  style="display: flex;  flex-direction: column;gap: 10px;">
        <ul>
            @foreach(Cart::instance('shopping')->content() as $item)
            <li class="cart-item">
                <a href="#"><img src="{{ asset($item->options->image) }}" alt="" /></a>
                <div class="cart-item-details">
                    <div class="cart-item-info">
                         <a href="#">{{ Str::limit($item->name, 30) }}</a>
                        <p>Qty: {{ $item->qty }}</p>
                        <p>৳{{ $item->price }}</p>
                    </div>
                   
                    <button class="remove-cart cart_remove" data-id="{{ $item->rowId }}">
                        <i data-feather="x"></i>
                    </button>
                </div>
            </li>
            @endforeach
        </ul>
        <p><strong>Total : ৳{{ Cart::instance('shopping')->subtotal() }}</strong></p>
        <a href="{{ route('customer.checkout') }}" class="go_cart">Buy Now</a>
    </div>
</div>

                </div>


                 <!-- Account / Login -->
                        <div>
                            @if(Auth::guard('customer')->check())
                                <a href="{{ route('customer.account') }}" class="d-flex align-items-center text-white">
                                    <i class="fa-regular fa-user me-1"></i>
                                    {{ Str::limit(Auth::guard('customer')->user()->name, 14) }}
                                </a>
                            @else
                                <a href="{{ route('customer.login') }}" class="d-flex fs-6 fw-semibold align-items-center text-white">
                                    <i class="fa-regular fa-user me-1"></i>
                                    Login / Sign Up
                                </a>
                            @endif
                        </div>
            </div>

            <!-- Cart -->
            





                       

                    </div>
                </div>
            </div>

    <!-- main-header end -->
    </header>

        <div id="content">
            @yield('content')
        </div>
            <!-- content end -->
        <footer>
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <div class="footer-about">
                                <a href="{{route('home')}}">
                                    <img src="{{asset($generalsetting->white_logo)}}" alt="" />
                                </a>
                                <p>{{$contact->address}}</p>
                                <a href="tel:{{$contact->hotline}}" class="footer-hotlint">{{$contact->hotline}}</a>
                            </div>
                        </div>
                        <!-- col end -->
                        <div class="col-sm-3 mb-3 mb-sm-0 col-6">
                            <div class="footer-menu">
                                <ul>
                                    <li class="title"><a>Useful Link</a></li>
                                    <li>
                                        <a href="{{route('contact')}}"> <a href="{{route('contact')}}">Contact Us</a></a>
                                    </li>
                                    @foreach($pages as $page)
                                    <li><a href="{{route('page',['slug'=>$page->slug])}}">{{$page->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!-- col end -->
                        <div class="col-sm-2 mb-3 mb-sm-0 col-6">
                            <div class="footer-menu">
                                <ul>
                                    <li class="title"><a>Link</a></li>
                                    @foreach($pagesright as $key=>$value)
                                    <li>
                                        <a href="{{route('page',['slug'=>$value->slug])}}">{{$value->name}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <!-- col end -->
                        <div class="col-sm-3 mb-3 mb-sm-0">
                            <div class="footer-menu">
                                <ul>
                                    <li class="title stay_conn"><a>Stay Connected</a></li>
                                </ul>
                                <ul class="social_link">
                                    @foreach($socialicons as $value)
                                    <li class="social_list">
                                        <a class="mobile-social-link" href="{{$value->link}}"><i class="{{$value->icon}}"></i></a>
                                    </li>
                                    @endforeach
                                </ul>
                                <div class="d_app">
                                    <h2>Download App</h2>
                                    <a href="">
                                        <img src="{{asset('frontEnd/images/app-download.png')}}" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- col end -->
                    </div>
                    <div class="col-sm-12 text-center" style="margin-top: 10px;
">
                            <div class="copyright">
								<a href="">
                                        <img src="{{asset('frontEnd/images/sslcom.png')}}" alt="" />
                                    </a>
                            </div>
                        </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="copyright">



								<p><span style="color: white;">Copyright © {{ date('Y') }} {{$generalsetting->name}}. All rights reserved </span> | <span style="color: white;">Website Designed by: <a target="_blank" href="https://neonexor.com"><span style="color: #71a3c1;font-weight: bold;">neoNexor</span></a></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <style>
            li>a, li>a:hover, li>a:hover, li>a:focus {
                color: #000000;
                text-decoration: none;
                outline-offset: 0;
                outline: 0;
            }
        </style>        

        <div class="footer_nav">
            <ul>
                <li>
                    <a class="toggle">
                        <span>
                            <i class="fa-solid fa-bars"></i>
                        </span>
                        {{-- <span>Category</span> --}}
                    </a>
                </li>

                <li>
                    <a href="https://api.whatsapp.com/send?phone={{ $contact->whatsapp }}&text=Hello">
                        <span>
                            <i class="fa fa-whatsapp"></i>
                        </span>
                        {{-- <span>Message</span> --}}
                    </a>
                </li>

                <li class="mobile_home">
                    <a href="{{route('home')}}">
                        <span><i class="fa-solid fa-home"></i></span> 
                        {{-- <span>Home</span> --}}
                    </a>
                </li>

                <li>
                    <a href="{{route('customer.checkout')}}">
                        <span>
                            <i class="fa-solid fa-cart-shopping"></i>
                             (<b class="mobilecart-qty">{{Cart::instance('shopping')->count()}}</b>)
                        </span>
                        {{-- <span>Cart (<b class="mobilecart-qty">{{Cart::instance('shopping')->count()}}</b>)</span> --}}
                    </a>
                </li>
                @if(Auth::guard('customer')->user())

                    <li>
                        <a href="javascript:void(0)" id="mobile-account-btn">
                            <span>
                                <i class="fa-solid fa-user"></i>
                            </span>
                        </a>
                    </li>


                @else
                <li>
                    <a href="{{route('customer.login')}}">
                        <span>
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <span>Login</span>
                    </a>
                </li>
                @endif
            </ul>
        </div>



<!-- Mobile Sidebar -->
<div class="mobile-sidebar" id="mobile-sidebar">
    <div class="mobile-sidebar-overlay" id="mobile-sidebar-overlay"></div>

    <div class="mobile-sidebar-content">
        <button class="close-sidebar" id="close-sidebar"><i class="fa-solid fa-xmark"></i></button>
        


        <div class="sidebar-menu-mini">
            <ul style="display: flex; flex-direction: column; padding: 7px 0px; gap: 28px;">    
                <li><a href="{{ route('customer.account') }}" class="{{ request()->is('customer/account') ? 'active' : '' }}"><i data-feather="user"></i> My Account</a></li>
                <li><a href="{{ route('customer.orders') }}" class="{{ request()->is('customer/orders') ? 'active' : '' }}"><i data-feather="database"></i> My Order</a></li>
                <li><a href="{{ route('customer.profile_edit') }}" class="{{ request()->is('customer/profile-edit') ? 'active' : '' }}"><i data-feather="edit"></i> Profile Edit</a></li>
                <li><a href="{{ route('customer.change_pass') }}" class="{{ request()->is('customer/change-password') ? 'active' : '' }}"><i data-feather="lock"></i> Change Password</a></li>
                <li>
                    <a href="{{ route('customer.logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i data-feather="log-out"></i> Logout
                    </a>
                    <form id="logout-form" action="{{ route('customer.logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>

<style>
@media (max-width: 768px) {

    .mobile-sidebar {
        position: fixed;
        top: 0;
        right: -100%; /* hide offscreen */
        width: 250px;
        height: 100%;
        z-index: 9999;
        transition: right 0.3s ease;
    }

    .mobile-sidebar.open {
        right: 0;
    }

    .mobile-sidebar-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 36%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        display: none;
        z-index: 9998;
    }

    .mobile-sidebar.open + .mobile-sidebar-overlay,
    .mobile-sidebar.open ~ .mobile-sidebar-overlay {
        display: block;
    }

    .mobile-sidebar-content {
        background: #fff;
        width: 250px;
        height: 100%;
        padding: 20px;
        overflow-y: auto;
        position: relative;
    }

    .close-sidebar {
        position: absolute;
        top: 15px;
        right: 15px;
        background: none;
        border: none;
        font-size: 20px;
        cursor: pointer;
    }

    .customer-auth {
        text-align: center;
        margin-bottom: 20px;
    }

    .customer-img img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        object-fit: cover;
    }

    .sidebar-menu ul {
        list-style: none;
        padding: 0;
    }

    .sidebar-menu ul li {
        margin-bottom: 15px;
    }

    .sidebar-menu ul li a {
        text-decoration: none;
        display: flex;
        align-items: center;
        gap: 10px;
        color: #333;
        font-weight: 500;
    }

    .sidebar-menu ul li a.active {
        color: #007bff;
    }
}
@media (min-width: 769px) {
    .mobile-sidebar,
    .mobile-sidebar-overlay {
        display: none;
    }
}

</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const accountBtn = document.getElementById('mobile-account-btn'); // footer nav Account icon
    const sidebar = document.getElementById('mobile-sidebar');
    const overlay = document.getElementById('mobile-sidebar-overlay');
    const closeBtn = document.getElementById('close-sidebar');

    // Open sidebar
    accountBtn.addEventListener('click', () => {
        sidebar.classList.add('open');
        overlay.style.display = 'block';
    });

    // Close sidebar
    closeBtn.addEventListener('click', () => {
        sidebar.classList.remove('open');
        overlay.style.display = 'none';
    });

    overlay.addEventListener('click', () => {
        sidebar.classList.remove('open');
        overlay.style.display = 'none';
    });
});


</script>



        <div class="scrolltop" style="">
            <div class="scroll">
                <i class="fa fa-angle-up"></i>
            </div>
        </div>


        <a href="https://api.whatsapp.com/send?phone={{ $contact->whatsapp }}&text=Hello" class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
        </a>
        <!-- /. fixed sidebar -->

        <div id="custom-modal"></div>
        <div id="page-overlay"></div>
        <div id="loading"><div class="custom-loader"></div></div>

        <script src="{{asset('frontEnd/js/jquery-3.6.3.min.js')}}"></script>
        <script src="{{asset('frontEnd/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('frontEnd/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('frontEnd/js/mobile-menu.js')}}"></script>
        <script src="{{asset('frontEnd/js/wsit-menu.js')}}"></script>
        <script src="{{asset('frontEnd/js/mobile-menu-init.js')}}"></script>
        <script src="{{asset('frontEnd/js/wow.min.js')}}"></script>
        <script>
            new WOW().init();
        </script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

        <!-- feather icon -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js"></script>
        <script>
            feather.replace();
        </script>
        <script src="{{asset('backEnd/assets/js/toastr.min.js')}}"></script>
        {!! Toastr::message() !!} @stack('script')
        <script>
            $(".quick_view").on("click", function () {
                var id = $(this).data("id");
                $("#loading").show();
                if (id) {
                    $.ajax({
                        type: "GET",
                        data: { id: id },
                        url: "{{route('quickview')}}",
                        success: function (data) {
                            if (data) {
                                $("#custom-modal").html(data);
                                $("#custom-modal").show();
                                $("#loading").hide();
                                $("#page-overlay").show();
                            }
                        },
                    });
                }
            });
        </script>
        <!-- quick view end -->
        <!-- cart js start -->
        <script>
            $(".addcartbutton").on("click", function () {
                var id = $(this).data("id");
                var checkout = $(this).data("checkout");
                var qty = 1;
                if (id) {
                    $.ajax({
                        cache: "false",
                        type: "GET",
                        url: "{{url('add-to-cart')}}/" + id + "/" + qty,
                        dataType: "json",
                        success: function (data) {
                            if (data) {
                                toastr.success('Success', 'Product add to cart successfully');
                                return cart_count() + mobile_cart();
                            }
                        },
                    });
                }
                if(checkout){
                    window.location.href = '{{route('customer.checkout')}}';
                }
            });
            $(".cart_store").on("click", function () {
                var id = $(this).data("id");
                var qty = $(this).parent().find("input").val();
                if (id) {
                    $.ajax({
                        type: "GET",
                        data: { id: id, qty: qty ? qty : 1 },
                        url: "{{route('cart.store')}}",
                        success: function (data) {
                            if (data) {
                                toastr.success('Success', 'Product add to cart succfully');
                                return cart_count() + mobile_cart();
                            }
                        },
                    });
                }
            });

            $(".cart_remove").on("click", function () {
                var id = $(this).data("id");
                if (id) {
                    $.ajax({
                        type: "GET",
                        data: { id: id },
                        url: "{{route('cart.remove')}}",
                        success: function (data) {
                            if (data) {
                                $(".cartlist").html(data);
                                return cart_count() + mobile_cart() + cart_summary();
                            }
                        },
                    });
                }
            });

            $(".cart_increment").on("click", function () {
                var id = $(this).data("id");
                if (id) {
                    $.ajax({
                        type: "GET",
                        data: { id: id },
                        url: "{{route('cart.increment')}}",
                        success: function (data) {
                            if (data) {
                                $(".cartlist").html(data);
                                return cart_count() + mobile_cart();
                            }
                        },
                    });
                }
            });

            $(".cart_decrement").on("click", function () {
                var id = $(this).data("id");
                if (id) {
                    $.ajax({
                        type: "GET",
                        data: { id: id },
                        url: "{{route('cart.decrement')}}",
                        success: function (data) {
                            if (data) {
                                $(".cartlist").html(data);
                                return cart_count() + mobile_cart();
                            }
                        },
                    });
                }
            });

            function cart_count() {
                $.ajax({
                    type: "GET",
                    url: "{{route('cart.count')}}",
                    success: function (data) {
                        if (data) {
                            $("#cart-qty").html(data);
                        } else {
                            $("#cart-qty").empty();
                        }
                    },
                });
            }
            function mobile_cart() {
                $.ajax({
                    type: "GET",
                    url: "{{route('mobile.cart.count')}}",
                    success: function (data) {
                        if (data) {
                            $(".mobilecart-qty").html(data);
                        } else {
                            $(".mobilecart-qty").empty();
                        }
                    },
                });
            }
            function cart_summary() {
                $.ajax({
                    type: "GET",
                    url: "{{route('shipping.charge')}}",
                    dataType: "html",
                    success: function (response) {
                        $(".cart-summary").html(response);
                    },
                });
            }
        </script>
        <!-- cart js end -->
        <script>
            $(".search_click").on("keyup change", function () {
                var keyword = $(".search_keyword").val();
                $.ajax({
                    type: "GET",
                    data: { keyword: keyword },
                    url: "{{route('livesearch')}}",
                    success: function (products) {
                        if (products) {
                            $(".search_result").html(products);
                        } else {
                            $(".search_result").empty();
                        }
                    },
                });
            });
            $(".msearch_click").on("keyup change", function () {
                var keyword = $(".msearch_keyword").val();
                $.ajax({
                    type: "GET",
                    data: { keyword: keyword },
                    url: "{{route('livesearch')}}",
                    success: function (products) {
                        if (products) {
                            $("#loading").hide();
                            $(".search_result").html(products);
                        } else {
                            $(".search_result").empty();
                        }
                    },
                });
            });
        </script>
        <!-- search js start -->
        <script></script>
        <script></script>
        <script>
            $(".district").on("change", function () {
                var id = $(this).val();
                $.ajax({
                    type: "GET",
                    data: { id: id },
                    url: "{{route('districts')}}",
                    success: function (res) {
                        if (res) {
                            $(".area").empty();
                            $(".area").append('<option value="">Select..</option>');
                            $.each(res, function (key, value) {
                                $(".area").append('<option value="' + key + '" >' + value + "</option>");
                            });
                        } else {
                            $(".area").empty();
                        }
                    },
                });
            });
        </script>
        <script>
            $(".toggle").on("click", function () {
                $("#page-overlay").show();
                $(".mobile-menu").addClass("active");
            });

            $("#page-overlay").on("click", function () {
                $("#page-overlay").hide();
                $(".mobile-menu").removeClass("active");
                $(".feature-products").removeClass("active");
            });

            $(".mobile-menu-close").on("click", function () {
                $("#page-overlay").hide();
                $(".mobile-menu").removeClass("active");
            });

            $(".mobile-filter-toggle").on("click", function () {
                $("#page-overlay").show();
                $(".feature-products").addClass("active");
            });
        </script>
        <script>
            $(document).ready(function () {
                $(".parent-category").each(function () {
                    const menuCatToggle = $(this).find(".menu-category-toggle");
                    const secondNav = $(this).find(".second-nav");

                    menuCatToggle.on("click", function () {
                        menuCatToggle.toggleClass("active");
                        secondNav.slideToggle("fast");
                        $(this).closest(".parent-category").toggleClass("active");
                    });
                });
                $(".parent-subcategory").each(function () {
                    const menuSubcatToggle = $(this).find(".menu-subcategory-toggle");
                    const thirdNav = $(this).find(".third-nav");

                    menuSubcatToggle.on("click", function () {
                        menuSubcatToggle.toggleClass("active");
                        thirdNav.slideToggle("fast");
                        $(this).closest(".parent-subcategory").toggleClass("active");
                    });
                });
            });
        </script>

        <script>
            var menu = new MmenuLight(document.querySelector("#menu"), "all");

            var navigator = menu.navigation({
                selectedClass: "Selected",
                slidingSubmenus: true,
                // theme: 'dark',
                title: "ক্যাটাগরি",
            });

            var drawer = menu.offcanvas({
                // position: 'left'
            });

            //  Open the menu.
            document.querySelector('a[href="#menu"]').addEventListener("click", (evnt) => {
                evnt.preventDefault();
                drawer.open();
            });
        </script>

        <script>

            /*=== Main Menu Fixed === */

            $(window).scroll(function () {
                if ($(this).scrollTop() > 50) {
                    $(".scrolltop:hidden").stop(true, true).fadeIn();
                } else {
                    $(".scrolltop").stop(true, true).fadeOut();
                }
            });
            $(function () {
                $(".scroll").click(function () {
                    $("html,body").animate({ scrollTop: $(".gotop").offset().top }, "1000");
                    return false;
                });
            });
        </script>
        <script>
            $(".filter_btn").click(function(){
               $(".filter_sidebar").addClass('active');
               $("body").css("overflow-y", "hidden");
            })
            $(".filter_close").click(function(){
               $(".filter_sidebar").removeClass('active');
               $("body").css("overflow-y", "auto");
            })
        </script>
        {{-- menu-sidebar --}}
        <script>
            $(document).ready(function() {
                // Toggle sidebar for button click
                $('#toggle-sidebar-btn').on('click', function() {
                    $('#menu-sidebar').toggleClass('open');
                });

                // Optional: close sidebar when clicking outside on mobile
                $(document).on('click', function(e) {
                    if (!$(e.target).closest('#menu-sidebar, #toggle-sidebar-btn').length) {
                        $('#menu-sidebar').removeClass('open');
                    }
                });
            });
        </script>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K29C9BKJ"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
    </body>
</html>

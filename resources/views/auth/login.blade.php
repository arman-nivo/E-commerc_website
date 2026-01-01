@extends('layouts.app')

@section('content')
    <div class="d-flex align-items-center justify-content-center vh-100 ">
        <div class="card shadow-lg border-0 rounded-4" style="width: 420px;">
            <div class="card-header text-center text-white rounded-top-4 py-3" style="background:  #71a3c1;">
                <h4 class="mb-0 fw-bold"><i class="bi bi-shield-lock-fill me-2"></i>Admin Login</h4>
            </div>

            <div class="card-body p-4">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    {{-- Email --}}
                    <div class="mb-3">
                        <label for="email" class="form-label fw-semibold">Email Address</label>
                        <input id="email" type="email"
                            class="form-control form-control-lg @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    {{-- Password --}}
                    <div class="mb-3">
                        <label for="password" class="form-label fw-semibold">Password</label>
                        <input id="password" type="password"
                            class="form-control form-control-lg @error('password') is-invalid @enderror" name="password"
                            required>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    {{-- Remember Me --}}
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label small text-muted" for="remember">
                            Remember Me
                        </label>
                    </div>

                    {{-- Submit --}}
                    <div class="d-grid mb-3">
                        <button type="submit" class="btn  btn-lg fw-bold" style="background:  #71a3c1;">
                            <i class="bi bi-box-arrow-in-right me-1"></i> Login
                        </button>
                    </div>

                    {{-- Forgot Password --}}
                    @if (Route::has('password.request'))
                        <div class="text-center">
                            <a class="text-decoration-none small text-primary" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
@endsection

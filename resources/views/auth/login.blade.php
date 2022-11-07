@extends('frontend.master')
@section('content')
    <div class="page-banner-area bg-2">
        <div class="container">
            <div class="page-banner-content">
                <h1>Login</h1>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Login</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="login-area pt-100 pb-70">
        <div class="container">
            <div class="login">
                <h3>Login</h3>
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email Address*">
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" value="{{ old('password') }}" class="form-control" placeholder="Password*">
                        @error('password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-check">
                        <input name="remember" class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Remember Me
                        </label>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="default-btn btn active">Login</button>
                        <a href="{{ route('register') }}">Not Registered?</a>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">Lost your password?</a>
                        @endif

                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection

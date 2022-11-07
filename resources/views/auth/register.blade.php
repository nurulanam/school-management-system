@extends('frontend.master')
@section('content')
    <div class="page-banner-area bg-2">
        <div class="container">
            <div class="page-banner-content">
                <h1>Register</h1>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Register</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="login-area pt-100 pb-70">
        <div class="container">
            <div class="login">
                <h3>Register</h3>
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <input type="name" name="name" value="{{ old('name') }}" class="form-control"
                            placeholder="Name*">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control"
                            placeholder="Email Address*">
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" value="{{ old('password') }}" class="form-control"
                            placeholder="Password*">
                        @error('password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}"
                            class="form-control" placeholder="Confirm Password*">
                        @error('password_confirmation')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-between align-items-middle">
                        <button type="submit" class="default-btn btn active">Register</button>
                    <a href="{{ route('login') }}">Already registered?</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection

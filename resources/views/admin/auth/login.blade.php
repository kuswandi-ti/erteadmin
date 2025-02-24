@extends('layouts.auth')

@section('page_title')
    {{ __('Admin Login') }}
@endsection

@section('content')
    <!-- Login Wrapper Area -->
    <div class="login-wrapper d-flex align-items-center justify-content-center">
        <div class="custom-container">
            <div class="text-center px-4">
                <img class="login-intro-img" src="{{ url(config('common.path_template') . 'img/default/login.webp') }}"
                    alt="">
            </div>

            <!-- Register Form -->
            <div class="register-form mt-4">
                <h6 class="mb-3 text-center">{{ __('Log in') }}</h6>

                <x-web-alert-message />

                <form method="POST" action="{{ route('admin.login.post') }}">
                    @csrf

                    <div class="form-group">
                        <input class="form-control" type="email" name="email" id="email" placeholder="Email">
                    </div>

                    <div class="form-group position-relative">
                        <input class="form-control" type="password" name="password" id="psw-input" placeholder="Password">
                        <div class="position-absolute" id="password-visibility">
                            <i class="bi bi-eye"></i>
                            <i class="bi bi-eye-slash"></i>
                        </div>
                    </div>

                    <button class="btn btn-primary w-100" type="submit">{{ __('Log in') }}</button>
                </form>
            </div>

            <!-- Login Meta -->
            <div class="login-meta-data text-center">
                <a class="stretched-link forgot-password d-block mt-3 mb-1"
                    href="{{ route('admin.forgot_password') }}">{{ __('Lupa Password ?') }}</a>
            </div>
        </div>
    </div>
@endsection

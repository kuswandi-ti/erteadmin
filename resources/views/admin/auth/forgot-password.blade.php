@extends('layouts.auth')

@section('page_title')
    {{ __('Admin Lupa Password') }}
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
                <h6 class="mb-3 text-center">{{ __('Lupa Password') }}</h6>

                <form action="home.html">
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" id="email" placeholder="Email">
                    </div>

                    <button class="btn btn-primary w-100" type="submit">{{ __('Reset Password') }}</button>
                </form>
            </div>

            <!-- Login Meta -->
            <div class="login-meta-data text-center">
                <a class="stretched-link forgot-password d-block mt-3 mb-1"
                    href="{{ route('admin.login') }}">{{ __('Log in') }}</a>
            </div>
        </div>
    </div>
@endsection

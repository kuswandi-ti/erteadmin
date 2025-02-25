@extends('admin.layouts.auth')

@section('page_title')
    {{ __('Lupa Password') }}
@endsection

@section('content')
    <div class="section mt-2 text-center">
        <img src="{{ url(config('common.path_template') . 'assets/img/default/login.webp') }}" alt="image" height="200"
            width="200">
    </div>

    <div class="section mt-2 text-center">
        <h2>{{ __('Lupa Password') }}</h2>
    </div>

    <div class="section mb-5 p-2">
        <form method="POST" action="{{ route('admin.login.post') }}">
            @csrf

            <div class="card">
                <div class="card-body pb-1">
                    <div class="form-group basic">
                        <div class="input-wrapper">
                            <label class="label" for="email">{{ __('E-mail') }}</label>
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="{{ __('E-mail') }}">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-2">
                <div>
                    {{ __('Sudah punya akun ?') }}
                </div>
                <div>
                    <a href="{{ route('admin.login') }}">{{ __('Log in disini') }}</a>
                </div>
            </div>

            <div class="form-button-group transparent">
                <button type="submit" class="btn btn-primary btn-block btn-lg">{{ __('Reset Password') }}</button>
            </div>
        </form>
    </div>
@endsection

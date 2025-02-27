@extends('layouts.member.auth')

@section('page_title')
    {{ __('Lupa Password') }}
@endsection

@section('page_content')
    <div class="page error-bg" id="particles-js">
        <div class="error-page">
            <div class="container-lg">
                <div class="row justify-content-center align-items-center authentication authentication-basic h-100">
                    <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">
                        <div class="my-5 d-flex justify-content-center">
                            &nbsp;
                        </div>
                        <div class="card custom-card rectangle2">
                            <div class="card-body p-sm-5 p-3 rectangle3">
                                <p class="h4 fw-semibold mb-4 text-center">{{ __('Lupa Password') }}</p>
                                <p class="mb-4 text-muted op-7 fw-normal text-center">
                                    {{ __('Lupa password? Tidak masalah. Cukup beri tahu kami alamat email Anda dan kami akan mengirimkan link untuk mereset ulang password melalui email yang akan memungkinkan Anda memilih kata sandi baru.') }}
                                </p>

                                <x-web-alert-message />

                                <form method="POST" action="{{ route('member.forgot_password.send') }}">
                                    @csrf

                                    <div class="row">
                                        <div class="col-xl-12 mt-3">
                                            <label for="email" class="form-label text-default">{{ __('Email') }}
                                                <x-all-not-null /></label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                name="email" value="{{ old('email') }}" placeholder="{{ __('Email') }}"
                                                required>
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xl-12 mt-4 text-center">
                                            <div class="d-grid gap-2 mb-4">
                                                <button class="btn btn-primary btn-wave"
                                                    type="submit">{{ __('Email Password Reset Link') }}</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <div class="text-center">
                                    <p class="fs-12 text-muted">{{ __('Sudah punya akun ?') }}
                                        {{ __('login') }}
                                        <a href="{{ route('member.login') }}" class="text-primary">{{ __('disini') }}</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

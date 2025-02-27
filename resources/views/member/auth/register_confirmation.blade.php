@extends('layouts.member.auth')

@section('page_title')
    {{ __('Register Confirmation') }}
@endsection

@section('page_content')
    <div class="page error-bg" id="particles-js">
        <canvas class="error-basic-background"></canvas>
        <!-- Start::error-page -->
        <div class="error-page  ">
            <div class="container">
                <!-- Start::row-1 -->
                <div class="row align-items-center justify-content-center">
                    <div class="col-xxl-7 col-xl-8 col-lg-9 rectangle error-authentication ">
                        <div class="text-center authentication-style rectangle1">
                            <div class="lh-1 mb-3 d-inline-table">
                                <p class="h1 text-info fw-bold">{{ __('Konfirmasi Register Member') }}</p>
                            </div>
                            <span class="d-block fs-15 mb-3">{{ __('Proses registrasi member sukses dilakukan') }}</span>
                            <p class="text-muted fw-normal">
                                {{ __('Silahkan untuk cek email dan klik link konfirmasi registrasi.') }}
                            </p>

                            <a href="{{ route('member.login') }}" class="btn btn-primary">
                                <i class="ri-arrow-left-line align-middle me-1 d-inline-block"></i>
                                {{ __('Ke Halaman Login') }}
                            </a>
                        </div>
                    </div>
                </div>
                <!--End::row-1 -->
            </div>
        </div>
        <!-- End::error-page -->
    </div>
@endsection

<x-web-sweet-alert />

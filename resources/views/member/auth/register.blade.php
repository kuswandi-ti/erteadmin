@extends('web.auth')

@section('page_title')
    {{ __('Register') }}
@endsection

@section('page_content')
    <div class="page error-bg" id="particles-js">
        <div class="error-page">
            <div class="container-lg">
                <div class="row justify-content-center align-items-center authentication authentication-basic h-100">
                    <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12">
                        {{-- <div class="my-5 d-flex justify-content-center">
                            <a href="index.html">
                                <img src="{{ !empty($setting_system['company_logo']) ? url(config('common.path_storage') . $setting_system['company_logo']) : url(config('common.path_template') . config('common.image_default_logo_company_main')) }}"
                                    alt="logo" class="desktop-logo">
                                <img src="{{ !empty($setting_system['company_logo']) ? url(config('common.path_storage') . $setting_system['company_logo']) : url(config('common.path_template') . config('common.image_default_logo_company_main')) }}"
                                    alt="logo" class="desktop-dark">
                            </a>
                        </div> --}}
                        <div class="card custom-card rectangle2">
                            <div class="card-body p-sm-5 p-3 rectangle3">
                                <p class="h4 fw-semibold mb-2 text-center">{{ __('Register') }}</p>
                                <p class="mb-4 text-muted op-7 fw-normal text-center">{{ __('Selamat datang') }} &amp;
                                    {{ __('bergabung bersama kami dengan akun gratis.') }}</p>

                                <form method="POST" action="{{ route('member.register.post') }}">
                                    @csrf

                                    <div class="row">
                                        <div class="col-xl-6 mt-3">
                                            <label for="nama" class="form-label text-default">{{ __('Nama') }}
                                                <x-all-not-null /></label>
                                            <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                                name="nama" value="{{ old('nama') }}" placeholder="{{ __('Nama') }}"
                                                required>
                                            @error('nama')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-xl-6 mt-3">
                                            <label for="email" class="form-label text-default">{{ __('Email') }}
                                                <x-all-not-null /></label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                name="email" value="{{ old('email') }}"
                                                placeholder="{{ __('Email') }}" required>
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xl-12 mt-3">
                                            <label for="perumahan" class="form-label text-default">{{ __('Perumahan') }}
                                                <x-all-not-null /></label>
                                            <select
                                                class="js-example-placeholder-single js-states form-control select2 @error('perumahan') is-invalid @enderror"
                                                name="perumahan" id="perumahan" required>
                                                @foreach ($perumahan as $data)
                                                    <option value="{{ $data->id }}"
                                                        {{ old('perumahan') == $data->id ? 'selected' : '' }}>
                                                        {{ $data->nama }}</option>
                                                @endforeach
                                            </select>
                                            @error('perumahan')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xl-6 mt-3">
                                            <label for="rt" class="form-label text-default">{{ __('RT') }}
                                                <x-all-not-null /></label>
                                            <input type="text" class="form-control @error('rt') is-invalid @enderror"
                                                name="rt" value="{{ old('rt') }}"
                                                placeholder="{{ __('RT') }}" required>
                                            @error('rt')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-xl-6 mt-3">
                                            <label for="rw" class="form-label text-default">{{ __('RW') }}
                                                <x-all-not-null /></label>
                                            <input type="text" class="form-control @error('rw') is-invalid @enderror"
                                                name="rw" value="{{ old('rw') }}"
                                                placeholder="{{ __('RW') }}" required>
                                            @error('rw')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xl-12 mt-3">
                                            <label for="cluster" class="form-label text-default">{{ __('Cluster') }}
                                                <x-all-not-null /></label>
                                            <input type="text"
                                                class="form-control @error('cluster') is-invalid @enderror" name="cluster"
                                                value="{{ old('cluster') }}" placeholder="{{ __('Cluster') }}" required>
                                            @error('cluster')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xl-12 mt-3">
                                            <label for="domain" class="form-label text-default">{{ __('Domain') }}
                                                <x-all-not-null /></label>
                                            <div class="input-group">
                                                <input type="text"
                                                    class="form-control @error('domain') is-invalid @enderror"
                                                    name="domain" value="{{ old('domain') }}"
                                                    placeholder="{{ __('Domain') }}" required>
                                                <span
                                                    class="input-group-text">.{{ config('common.central_domain') }}</span>
                                            </div>
                                            @error('domain')
                                                <div class="invalid-feedback d-block">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xl-12 mt-4 text-center">
                                            <div class="d-grid gap-2 mb-4">
                                                <button class="btn btn-primary btn-wave"
                                                    type="submit">{{ __('Register') }}</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@include('web.layouts.includes.select2')

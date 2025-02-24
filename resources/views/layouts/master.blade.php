<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Affan - PWA Mobile HTML Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <meta name="theme-color" content="#0134d4">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Title -->
    <title>{{ $setting_system['site_title'] ?? config('app.name') }} &mdash; @yield('page_title')</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('layouts.partials._favicon')
    @include('layouts.partials._styles')
    @stack('style_vendor')
    @include('layouts.partials._manifest')
</head>

<body>
    @include('layouts.partials._preloader')

    <!-- Internet Connection Status -->
    <div class="internet-connection-status" id="internetStatus"></div>

    @include('layouts.partials._header')

    @include('layouts.partials._sidebar')

    <div class="page-content-wrapper py-3">
        @yield('content')
    </div>

    @include('layouts.partials._footer')

    @include('layouts.partials._scripts')

    <!-- Page Specific JS File -->
    @stack('scripts_vendor')

    <!-- Page Specific JS Script -->
    @stack('scripts')

    <!-- Inline JS -->
    <script>
        $('body').on('click', '.logout', function(e) {
            e.preventDefault();
            swalWithBootstrapButtons.fire({
                title: "{{ __('Anda yakin akan logout ?') }}",
                text: "{{ __('Setelah logout akan kembali ke halaman login') }}",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: "{{ __('Ya, logout !') }}",
                cancelButtonText: "{{ __('Batal') }}",
                reverseButtons: false
            }).then((result) => {
                if (result.value === true) {
                    $('#form-logout').submit()
                }
            });
        });
    </script>
</body>

</html>

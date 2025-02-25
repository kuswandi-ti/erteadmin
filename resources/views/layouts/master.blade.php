<!doctype html>
<html lang="en">

<head>
    @include('layouts.partials._meta')

    <title>{{ $setting_system['site_title'] ?? config('app.name') }} &mdash; @yield('page_title')</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('layouts.partials._favicon')
    @include('layouts.partials._styles')

    @stack('styles_vendor')

    @include('layouts.partials._manifest')
</head>

<body>

    @include('layouts.partials._preloader')

    @include('layouts.partials._header')

    <!-- App Capsule -->
    <div id="appCapsule">
        @yield('content')

        <!-- app footer -->
        <div class="appFooter">
            <div class="footer-title">
                {{ __('Copyright') }} © {{ $setting_system['site_title'] ?? config('app.name') }} {{ date('Y') }}.
                {{ __('All Rights Reserved') }}.
            </div>
        </div>
        <!-- * app footer -->
    </div>
    <!-- * App Capsule -->

    @include('layouts.partials._footer')

    @include('layouts.partials._sidebar')

    @include('layouts.partials._scripts')

    <!-- Page Specific JS File -->
    @stack('scripts_vendor')

    <!-- Page Specific JS Script -->
    @stack('scripts')

    <!-- Inline JS -->
    <script>
        $('body').on('click', '#logout', function(e) {
            e.preventDefault();
            $('#form-logout').submit();
        });
    </script>

</body>

</html>

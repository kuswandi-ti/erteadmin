<!doctype html>
<html lang="en">

<head>
    @include('layouts.partials._meta')

    <title>{{ $setting_system['site_title'] ?? config('app.name') }} &mdash; {{ __('Admin') }} &mdash;
        @yield('page_title')</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('layouts.partials._favicon')
    @include('layouts.partials._styles')

    @stack('style_vendor')

    @include('layouts.partials._manifest')
</head>

<body>
    @include('layouts.partials._preloader')

    <!-- App Capsule -->
    <div id="appCapsule">
        @yield('content')
    </div>
    <!-- * App Capsule -->

    @include('layouts.partials._scripts')

    <!-- Page Specific JS File -->
    @stack('scripts_vendor')

    <!-- Page Specific JS Script -->
    @stack('scripts')

    <!-- Inline JS -->
    <script></script>

</body>

</html>

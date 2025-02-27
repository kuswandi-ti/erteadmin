<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-vertical-style="overlay" data-theme-mode="light"
    data-header-styles="light" data-menu-styles="light" data-toggled="close">

<head>
    @include('layouts.member.partials.auth._meta')

    <title>{{ $setting_system['site_title'] ?? config('app.name') }} &mdash; @yield('page_title')</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('layouts.member.partials.auth._favicon')

    @stack('link_vendor')

    @include('layouts.member.partials.auth._styles')

    <!-- Page Specific CSS File -->
    @stack('styles_vendor')

    <!-- Page Specific CSS Style -->
    @stack('styles')
</head>

<body>

    @yield('page_content')

    @include('layouts.member.partials.auth._scripts')

    <!-- Page Specific JS File -->
    @stack('scripts_vendor')

    <!-- Page Specific JS Script -->
    @stack('scripts')

    <!-- Inline JS -->
    <script></script>

</body>

</html>

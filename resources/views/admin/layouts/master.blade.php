<!doctype html>
<html lang="en">

<head>
    @include('layouts.partials._meta')

    <title>{{ $setting_system['site_title'] ?? config('app.name') }} &mdash; {{ __('Admin') }} &mdash;
        @yield('page_title')</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('layouts.partials._favicon')
    @include('layouts.partials._styles')

    @stack('styles_vendor')

    @include('layouts.partials._manifest')
</head>

<body>

    @include('layouts.partials._preloader')

    @yield('header')

    <!-- App Capsule -->
    <div id="appCapsule">
        @yield('content')
    </div>
    <!-- * App Capsule -->

    @include('admin.layouts.partials._footer')

    @include('admin.layouts.partials._sidebar')

    @include('layouts.partials._scripts')

    <!-- Page Specific JS File -->
    @stack('scripts_vendor')

    <!-- Page Specific JS Script -->
    @stack('scripts')

    <!-- Inline JS -->
    <script>
        $(document).ready(function() {
            const timeout = 300000; // 900000 ms = 15 minutes
            var idleTimer = null;
            $('*').bind(
                'mousemove click mouseup mousedown keydown keypress keyup submit change mouseenter scroll resize dblclick',
                function() {
                    clearTimeout(idleTimer);

                    idleTimer = setTimeout(function() {
                        document.getElementById('form-logout').submit();
                    }, timeout);
                });
            $("body").trigger("mousemove");
        });

        $('body').on('click', '#logout', function(e) {
            e.preventDefault();
            $('#form-logout').submit();
        });
    </script>

</body>

</html>

<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="gradient"
    data-menu-styles="dark">

<head>
    @include('layouts.member.partials.auth._meta')

    <title>{{ $setting_system['site_title'] ?? config('app.name') }} &mdash; @yield('page_title')</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('layouts.member.partials.auth._favicon')

    @stack('link_vendor')

    @include('layouts.member.partials.master._styles')

    <!-- Page Specific CSS File -->
    @stack('styles_vendor')

    <!-- Page Specific CSS Style -->
    @stack('styles')
</head>

<body>
    @include('layouts.member.partials.master._switcher')

    <!-- Loader -->
    <div id="loader">
        <img src="{{ url(config('common.path_template_web') . 'images/media/loader.svg') }}" alt="">
    </div>
    <!-- Loader -->

    <div class="page">
        @include('layouts.member.partials.master._header')

        @include('layouts.member.partials.master._sidebar')

        <!-- Page Header -->
        <div class="page-header-breadcrumb d-md-flex d-block align-items-center justify-content-between ">
            <h4 class="mb-0 fw-medium">
                @yield('section_header_title')
            </h4>
            <ol class="breadcrumb">
                @section('section_header_breadcrumb')
                    <li class="breadcrumb-item">
                        <a href="{{ route('member.dashboard.index') }}" class="text-white-50">
                            {{ __('Dashboard') }}
                        </a>
                    </li>
                @show
            </ol>
        </div>
        <!-- Page Header Close -->

        <!-- Start::app-content -->
        <div class="main-content app-content">
            <div class="container-fluid">
                @yield('page_content')
            </div>
        </div>
        <!-- End::app-content -->

        <!-- Footer Start -->
        <footer class="py-3 mt-auto text-center bg-white footer">
            <div class="container">
                <span class="text-muted"> {{ __('Copyright') }} © <span id="year"></span>
                    <a href="javascript:void(0);" class="text-dark fw-semibold">
                        {{ $setting_system['site_title'] ?? config('app.name') }}
                    </a>. {{ __('All rights reserved') }}
                </span>
            </div>
        </footer>
        <!-- Footer End -->
    </div>

    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-circle-fill fs-20"></i></span>
    </div>

    <div id="responsive-overlay"></div>

    @include('layouts.member.partials.master._scripts')

    <!-- Page Specific JS File -->
    @stack('scripts_vendor')

    <!-- Page Specific JS Script -->
    @stack('scripts')

    <!-- Inline JS -->
    <script>
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-danger ms-2',
                cancelButton: 'btn btn-success'
            },
            buttonsStyling: false
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function preview(target, image) {
            $(target)
                .attr('src', window.URL.createObjectURL(image))
                .show();
        };

        function truncateString(text, length = 10, prefix = '...') {
            return jQuery.trim(text).substring(0, length).trim(this) + prefix;
        };

        window.formatAmount = function(num, digit = 2) {
            var rounded = (Math.round(num * 100) / 100).toFixed(digit);
            return rounded.replace(/\d(?=(\d{3})+\.)/g, '$&,');
        };

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

        function IsEmail(email) {
            const regex =
                /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if (!regex.test(email)) {
                return false;
            } else {
                return true;
            }
        }

        $(document).ready(function() {
            $('body').on('keyup', '.number-only', function(e) {
                this.value = this.value.replace(/[^0-9]/g, '');
            });

            $('body').on('keyup', '.zero-default', function(e) {
                if (!$(this).val()) {
                    e.preventDefault();
                    $(this).val(0);
                }
            });

            $('body').on('keyup', '.empty-default', function(e) {
                if (!$(this).val()) {
                    e.preventDefault();
                    $(this).val('');
                }
            });

            $('.custom-file-input').on('change', function() {
                let filename = $(this)
                    .val()
                    .split('\\')
                    .pop();
                $(this)
                    .next('.custom-file-label')
                    .addClass('selected')
                    .html(filename)
            });

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

            $('body').on('click', '.delete_item', function(e) {
                e.preventDefault();
                swalWithBootstrapButtons.fire({
                    title: "{{ __('Anda yakin akan menghapus data ?') }}",
                    text: "{{ __('Setelah data terhapus, anda tidak dapat mengembalikannya') }}",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: "{{ __('Ya, hapus data !') }}",
                    cancelButtonText: "{{ __('Batal') }}",
                    reverseButtons: false
                }).then((result) => {
                    if (result.isConfirmed) {
                        let url = $(this).attr('href');
                        $.ajax({
                            method: 'DELETE',
                            url: url,
                            success: function(data) {
                                if (data.status == 'success') {
                                    Swal.fire(
                                        "{{ __('Terhapus !') }}",
                                        data.message,
                                        'success'
                                    ).then(() => {
                                        window.location.reload();
                                    });
                                } else if (data.status == 'error') {
                                    Swal.fire(
                                        'Error!',
                                        data.message,
                                        'error'
                                    );
                                }
                            },
                            error: function(xhr, status, error) {
                                console.error(error);
                            }
                        });
                    }
                });
            });

            $('body').on('click', '.approve', function(e) {
                e.preventDefault();
                swalWithBootstrapButtons.fire({
                    title: "{{ __('Anda yakin akan menyetujui ?') }}",
                    text: "{{ __('Setelah data terproses, status akan berubah menjadi approve') }}",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: "{{ __('Ya, setujui !') }}",
                    cancelButtonText: "{{ __('Batal') }}",
                    reverseButtons: false
                }).then((result) => {
                    if (result.isConfirmed) {
                        let url = $(this).attr('href');
                        $.ajax({
                            method: 'POST',
                            url: url,
                            success: function(data) {
                                if (data.status == 'success') {
                                    Swal.fire(
                                        "{{ __('Disetujui !') }}",
                                        data.message,
                                        'success'
                                    ).then(() => {
                                        window.location.reload();
                                    });
                                } else if (data.status == 'error') {
                                    Swal.fire(
                                        'Error!',
                                        data.message,
                                        'error'
                                    );
                                }
                            },
                            error: function(xhr, status, error) {
                                console.error(error);
                            }
                        });
                    }
                });
            });

            $('body').on('click', '.reject', function(e) {
                e.preventDefault();
                swalWithBootstrapButtons.fire({
                    title: "{{ __('Anda yakin akan menolak ?') }}",
                    text: "{{ __('Setelah data terproses, status akan berubah menjadi reject') }}",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: "{{ __('Ya, tolak !') }}",
                    cancelButtonText: "{{ __('Batal') }}",
                    reverseButtons: false
                }).then((result) => {
                    if (result.isConfirmed) {
                        let url = $(this).attr('href');
                        $.ajax({
                            method: 'POST',
                            url: url,
                            success: function(data) {
                                if (data.status == 'success') {
                                    Swal.fire(
                                        "{{ __('Ditolak !') }}",
                                        data.message,
                                        'success'
                                    ).then(() => {
                                        window.location.reload();
                                    });
                                } else if (data.status == 'error') {
                                    Swal.fire(
                                        'Error!',
                                        data.message,
                                        'error'
                                    );
                                }
                            },
                            error: function(xhr, status, error) {
                                console.error(error);
                            }
                        });
                    }
                });
            });

            $('body').on('click', '.deactivate', function(e) {
                e.preventDefault();
                swalWithBootstrapButtons.fire({
                    title: "{{ __('Anda yakin akan menonaktifkan data ?') }}",
                    text: "{{ __('Setelah data non aktif, data tidak bisa digunakan') }}",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: "{{ __('Ya, nonaktifkan data !') }}",
                    cancelButtonText: "{{ __('Batal') }}",
                    reverseButtons: false
                }).then((result) => {
                    if (result.isConfirmed) {
                        let url = $(this).attr('href');
                        $.ajax({
                            method: 'DELETE',
                            url: url,
                            success: function(data) {
                                if (data.status == 'success') {
                                    Swal.fire(
                                        "{{ __('Tidak Aktif !') }}",
                                        data.message,
                                        'success'
                                    ).then(() => {
                                        window.location.reload();
                                    });
                                } else if (data.status == 'error') {
                                    Swal.fire(
                                        'Error!',
                                        data.message,
                                        'error'
                                    );
                                }
                            },
                            error: function(xhr, status, error) {
                                console.error(error);
                            }
                        });
                    }
                });
            });
        });
    </script>
</body>

</html>

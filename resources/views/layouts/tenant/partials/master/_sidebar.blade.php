<!-- Start::app-sidebar -->
<aside class="app-sidebar" id="sidebar">
    <!-- Start::main-sidebar-header -->
    <div class="main-sidebar-header">
        <a href="{{ route('member.dashboard.index') }}" class="header-logo">
            <img src="{{ !empty($setting_system['company_logo_dekstop']) ? url(config('common.path_storage') . $setting_system['company_logo_desktop']) : url(config('common.path_template') . config('common.image_default_logo_company_desktop')) }}"
                alt="logo" class="desktop-logo" width="125" height="33">
            <img src="{{ !empty($setting_system['company_logo_toggle']) ? url(config('common.path_storage') . $setting_system['company_logo_toggle']) : url(config('common.path_template') . config('common.image_default_logo_company_toggle')) }}"
                alt="logo" class="toggle-logo" width="38" height="33">
            <img src="{{ !empty($setting_system['company_logo_desktop']) ? url(config('common.path_storage') . $setting_system['company_logo_desktop']) : url(config('common.path_template') . config('common.image_default_logo_company_desktop')) }}"
                alt="logo" class="desktop-dark" width="125" height="33">
            <img src="{{ !empty($setting_system['company_logo_toggle']) ? url(config('common.path_storage') . $setting_system['company_logo_toggle']) : url(config('common.path_template') . config('common.image_default_logo_company_toggle')) }}"
                alt="logo" class="toggle-dark" width="38" height="33">
        </a>
    </div>
    <!-- End::main-sidebar-header -->

    <!-- Start::main-sidebar -->
    <div class="main-sidebar" id="sidebar-scroll">
        <!-- Start::nav -->
        <nav class="main-menu-container nav nav-pills flex-column sub-open">
            <div class="slide-left" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                    viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                </svg>
            </div>
            <ul class="main-menu">
                <li class="mt-4 mb-2 text-center">
                    <span class="category-name badge bg-danger">
                        <strong>{{ getLoggedUser()->cluster ?? '' }}</strong>
                    </span>
                </li>

                {{-- ======================================================================================================= --}}
                {{-- DASHBOARD - BEGIN --}}
                {{-- ======================================================================================================= --}}
                <!-- Start::slide__category -->
                <li class="mt-4 slide__category"><span class="category-name">{{ __('Dashboard') }}</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide">
                    <a href="{{ route('member.dashboard.index') }}"
                        class="side-menu__item {{ setSidebarActive(['dashboard.*']) }}">
                        <span class=" side-menu__icon">
                            <i class='bx bx-desktop'></i>
                        </span>
                        <span class="side-menu__label">{{ __('Dashboard') }}</span>
                    </a>
                </li>
                <!-- End::slide -->
                {{-- ======================================================================================================= --}}
                {{-- DASHBOARD - END --}}
                {{-- ======================================================================================================= --}}
            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z">
                    </path>
                </svg></div>
        </nav>
        <!-- End::nav -->

    </div>
    <!-- End::main-sidebar -->

</aside>
<!-- End::app-sidebar -->

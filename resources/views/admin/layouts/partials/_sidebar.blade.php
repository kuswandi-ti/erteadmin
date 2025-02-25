<!-- App Sidebar -->
<div class="modal fade panelbox panelbox-left" id="sidebarPanel" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <!-- profile box -->
                <div class="profileBox pt-2 pb-2">
                    <div class="image-wrapper">
                        <img src="{{ !empty(getLoggedUser()->image) ? url(config('common.path_storage') . getLoggedUser()->image) : url(config('common.path_template') . config('common.image_user_profile_small')) }}"
                            alt="image" class="imaged  w36">
                    </div>
                    <div class="in">
                        <strong>{{ getLoggedUser()->name }}</strong>
                        <div class="text-muted">{{ getLoggedUser()->email }}</div>
                    </div>
                    <a href="#" class="btn btn-link btn-icon sidebar-close" data-bs-dismiss="modal">
                        <ion-icon name="close-outline"></ion-icon>
                    </a>
                </div>
                <!-- * profile box -->

                <ul class="listview flush transparent no-line image-listview">
                    <li>
                        <a href="{{ route('admin.dashboard.index') }}" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="tv-outline"></ion-icon>
                            </div>
                            <div class="in">
                                {{ __('Dashboard') }}
                            </div>
                        </a>
                    </li>
                </ul>

                <!-- menu -->
                <div class="listview-title mt-1">{{ __('Master Data') }}</div>
                <ul class="listview flush transparent no-line image-listview">
                    <li>
                        <a href="index.html" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="storefront-outline"></ion-icon>
                            </div>
                            <div class="in">
                                {{ __('Perumahan') }}
                            </div>
                        </a>
                    </li>
                    {{-- <li>
                        <a href="index.html" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="business-outline"></ion-icon>
                            </div>
                            <div class="in">
                                {{ __('Lingkungan') }}
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="index.html" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="grid-outline"></ion-icon>
                            </div>
                            <div class="in">
                                {{ __('Cluster / Jalan') }}
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="index.html" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="albums-outline"></ion-icon>
                            </div>
                            <div class="in">
                                {{ __('Blok') }}
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="index.html" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="home-outline"></ion-icon>
                            </div>
                            <div class="in">
                                {{ __('Rumah') }}
                            </div>
                        </a>
                    </li> --}}
                    <li>
                        <a href="index.html" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="bookmark-outline"></ion-icon>
                            </div>
                            <div class="in">
                                {{ __('Status Rumah') }}
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="index.html" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="document-text-outline"></ion-icon>
                            </div>
                            <div class="in">
                                {{ __('Agama') }}
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="index.html" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="document-text-outline"></ion-icon>
                            </div>
                            <div class="in">
                                {{ __('Pekerjaan') }}
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- * menu -->

                <!-- others -->
                <div class="listview-title mt-1">{{ __('User Manajemen') }}</div>
                <ul class="listview flush transparent no-line image-listview">
                    <li>
                        <a href="{{ route('admin.permission.index') }}" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="settings-outline"></ion-icon>
                            </div>
                            <div class="in">
                                {{ __('Permission') }}
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="app-settings.html" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="settings-outline"></ion-icon>
                            </div>
                            <div class="in">
                                {{ __('Role') }}
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="app-settings.html" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="settings-outline"></ion-icon>
                            </div>
                            <div class="in">
                                {{ __('User') }}
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- * others -->
            </div>
        </div>
    </div>
</div>
<!-- * App Sidebar -->

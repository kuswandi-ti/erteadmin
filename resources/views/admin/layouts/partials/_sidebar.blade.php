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
                    <li>
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
                    </li>
                    <li>
                        <a href="index.html" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="bookmark-outline"></ion-icon>
                            </div>
                            <div class="in">
                                {{ __('Status Kepemilikan Rumah') }}
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
                <div class="listview-title mt-1">Others</div>
                <ul class="listview flush transparent no-line image-listview">
                    <li>
                        <a href="app-settings.html" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="settings-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Settings
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="component-messages.html" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="chatbubble-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Support
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="item logout" data-bs-toggle="modal" data-bs-target="#modal_logout">
                            <div class="icon-box bg-primary">
                                <ion-icon name="log-out-outline"></ion-icon>
                            </div>
                            <div class="in">
                                {{ __('Logout') }}
                            </div>
                        </a>
                        <form action="{{ route('admin.logout') }}" method="post" id="form-logout">
                            @csrf
                        </form>
                    </li>
                </ul>
                <!-- * others -->
            </div>
        </div>
    </div>
</div>
<!-- * App Sidebar -->

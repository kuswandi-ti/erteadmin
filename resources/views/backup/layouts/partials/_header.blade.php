<!-- App Header -->
<div class="appHeader bg-primary text-light">
    <div class="left">
        <a href="#" class="headerButton" data-bs-toggle="modal" data-bs-target="#sidebarPanel">
            <ion-icon name="menu-outline"></ion-icon>
        </a>
    </div>
    <div class="pageTitle">
        <img src="{{ !empty(getLoggedUser()->image) ? url(config('common.path_storage') . getLoggedUser()->image) : url(config('common.path_template') . config('common.image_user_profile_small')) }}"
            alt="image" class="imaged w20">
        {{ $setting_system['site_title'] ?? config('app.name') }}
    </div>
    <div class="right">
        <a href="app-notifications.html" class="headerButton">
            <ion-icon class="icon" name="notifications-outline"></ion-icon>
            <span class="badge badge-danger">4</span>
        </a>
        <a href="#" class="headerButton logout" data-bs-toggle="modal" data-bs-target="#modal_logout">
            <ion-icon name="log-out-outline"></ion-icon>
        </a>
        <form action="{{ route('admin.logout') }}" method="post" id="form-logout">
            @csrf
        </form>
    </div>
</div>
<!-- * App Header -->

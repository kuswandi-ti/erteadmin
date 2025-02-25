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

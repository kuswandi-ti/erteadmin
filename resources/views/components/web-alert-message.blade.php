@if ($message = Session::get('success'))
    <div class="alert alert-imaged alert-success alert-dismissible fade show mb-1" role="alert">
        <div class="icon-wrap">
            <ion-icon name="checkmark-circle-outline"></ion-icon>
        </div>
        <div>
            {{ $message }}
        </div>
    </div>
@endif

@if ($message = Session::get('error'))
    <div class="alert alert-imaged alert-danger alert-dismissible fade show mb-1" role="alert">
        <div class="icon-wrap">
            <ion-icon name="close-circle-outline"></ion-icon>
        </div>
        <div>
            {{ $message }}
        </div>
    </div>
@endif

@if ($message = Session::get('warning'))
    <div class="alert alert-imaged alert-warning alert-dismissible fade show mb-1" role="alert">
        <div class="icon-wrap">
            <ion-icon name="alert-circle-outline"></ion-icon>
        </div>
        <div>
            {{ $message }}
        </div>
    </div>
@endif

@if ($message = Session::get('info'))
    <div class="alert alert-imaged alert-info alert-dismissible fade show mb-1" role="alert">
        <div class="icon-wrap">
            <ion-icon name="information-circle-outline"></ion-icon>
        </div>
        <div>
            {{ $message }}
        </div>
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-imaged alert-danger alert-dismissible fade show mb-1" role="alert">
        <div class="icon-wrap">
            <ion-icon name="close-circle-outline"></ion-icon>
        </div>
        <div>
            <strong> {{ __('Please check the form below for errors') }}</strong>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    </div>
@endif

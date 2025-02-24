@if ($message = Session::get('success'))
    <div class="alert custom-alert-two alert-success alert-dismissible fade show" role="alert">
        <i class="bi bi-check-circle"></i>
        {{ $message }}
    </div>
@endif

@if ($message = Session::get('error'))
    <div class="alert custom-alert-two alert-danger alert-dismissible fade show" role="alert">
        <i class="bi bi-x-circle"></i>
        {{ $message }}
    </div>
@endif

@if ($message = Session::get('warning'))
    <div class="alert alert-warning" role="alert">
        {{ $message }}
    </div>
    <div class="alert custom-alert-two alert-warning alert-dismissible fade show" role="alert">
        <i class="bi bi-exclamation-circle"></i>
        {{ $message }}
    </div>
@endif

@if ($message = Session::get('info'))
    <div class="alert custom-alert-two alert-info alert-dismissible fade show" role="alert">
        <i class="bi bi-info-circle"></i>
        {{ $message }}
    </div>
@endif

@if ($errors->any())
    <div class="alert custom-alert-two alert-danger alert-dismissible fade show" role="alert">
        <i class="bi bi-x-circle"></i>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </div>
@endif

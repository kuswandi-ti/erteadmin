<h1>Email Verification</h1>

Please verify your email with bellow link:
<a href="{{ route('member.register_verify', ['token' => $token]) }}" target="_blank">
    {{ __('Click here to verification') }}
</a>

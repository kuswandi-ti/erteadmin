<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\Admin\AuthLoginRequest;

class AuthController extends Controller
{
    public function login()
    {
        if (!Auth::guard(getGuardNameAdmin())->check()) {
            return view('admin.auth.login');
        } else {
            return redirect()->route('admin.dashboard.index');
        }
    }

    public function handleLogin(AuthLoginRequest $request)
    {
        $request->authenticate();

        return redirect()->route('admin.dashboard.index');
    }

    public function forgotPassword()
    {
        return view('admin.auth.forgot-password');
    }

    public function logout(Request $request): RedirectResponse
    {
        Session::flush();

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}

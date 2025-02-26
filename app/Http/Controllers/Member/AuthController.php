<?php

namespace App\Http\Controllers\Member;

use App\Models\Member\User;
use Illuminate\Support\Str;
use App\Models\Admin\Perumahan;
use App\Http\Controllers\Controller;
use App\Http\Requests\Member\AuthRegisterRequest;

class AuthController extends Controller
{
    // public function login()
    // {
    //     // if (!Auth::guard(getGuardNameAdmin())->check()) {
    //     //     return view('admin.auth.login');
    //     // } else {
    //     //     return redirect()->route('admin.dashboard.index');
    //     // }
    //     return view('member.auth.login');
    // }

    // public function handleLogin(AuthLoginRequest $request)
    // {
    //     $request->authenticate();

    //     return redirect()->route('member.dashboard.index');
    // }

    // public function forgotPassword()
    // {
    //     return view('admin.auth.forgot-password');
    // }

    public function register()
    {
        $perumahan = Perumahan::orderBy('nama')->get();

        return view('member.auth.register', compact('perumahan'));
    }

    public function handleRegister(AuthRegisterRequest $request)
    {
        $store = User::create([
            'name' => $request->nama,
            'slug' => Str::slug($request->nama),
            'email' => $request->email,
            'domain' => $request->domain,
            'id_perumahan' => $request->perumahan,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'cluster' => $request->cluster,
            'created_by' => $request->email,
        ]);

        if ($store) {
            return redirect()->route('member.register.index')->with('success', __('Data register berhasil dibuat'));
        } else {
            return redirect()->route('member.register.index')->with('error', __('Data register gagal dibuat'));
        }
    }

    // public function logout(Request $request): RedirectResponse
    // {
    //     Session::flush();

    //     Auth::logout();

    //     $request->session()->invalidate();

    //     $request->session()->regenerateToken();

    //     return redirect()->route('member.login');
    // }
}

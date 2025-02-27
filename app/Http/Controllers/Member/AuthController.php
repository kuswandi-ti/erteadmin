<?php

namespace App\Http\Controllers\Member;

use App\Models\Member\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Admin\Perumahan;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use App\Mail\Member\RegisterVerifyMail;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\Member\AuthLoginRequest;
use App\Http\Requests\Member\AuthRegisterRequest;
use App\Http\Requests\Member\AuthForgotPasswordRequest;

class AuthController extends Controller
{
    public function login()
    {
        if (!Auth::guard(getGuardNameMember())->check()) {
            return view('member.auth.login');
        } else {
            return redirect()->route('member.dashboard.index');
        }
    }

    public function handleLogin(AuthLoginRequest $request)
    {
        $request->authenticate();

        return redirect()->route('member.dashboard.index');
    }

    public function register()
    {
        $perumahan = Perumahan::orderBy('nama')->get();

        return view('member.auth.register', compact('perumahan'));
    }

    public function handleRegister(AuthRegisterRequest $request)
    {
        $token = Str::random(64);

        $member = User::create([
            'name' => $request->nama,
            'slug' => Str::slug($request->nama),
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'domain' => $request->domain,
            'id_perumahan' => $request->perumahan,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'cluster' => $request->cluster,
            'register_token' => $token,
            'created_by' => $request->email,
        ]);

        // Assign Role to Member
        $role = Role::findByName('Admin', 'member');
        $member->guard_name = 'member';
        $member->assignRole($role);

        // Mail::to($request->email)->send(new RegisterVerifyMail($token));

        if ($member) {
            return redirect()->route('member.register_confirmation')->with('success', __('Data register berhasil dibuat'));
        } else {
            return redirect()->route('member.register')->with('error', __('Data register gagal dibuat'));
        }
    }

    // public function registerVerify($token)
    // {
    //     $member = User::where('register_token', $token)->first();

    //     $message = 'Sorry your email cannot be identified.';

    //     if (!is_null($member)) {
    //         if (!$member->email_verified_at) {
    //             $member->email_verified_at = now();
    //             $member->save();
    //             $message = "Your e-mail is verified. You can now login";
    //         } else {
    //             $message = "Your e-mail is already verified. You can now login";
    //         }
    //     }

    //     return redirect()->route('member.login')->with('success', $message);
    // }

    public function registerConfirmation()
    {
        return view('member.auth.register_confirmation');
    }

    public function forgotPassword()
    {
        return view('member.auth.forgot_password');
    }

    public function sendResetLink(AuthForgotPasswordRequest $request)
    {
        $token = Str::random(64);

        $member = User::where('email', $request->email)->first();
        $member->remember_token = $token;
        $member->save();

        // Mail::to($request->email)->send(new AdminSendResetLinkMail($token, $request->email));

        return redirect()->back()->with('success', __('Email telah dikirim ke alamat email Anda. Silakan periksa email Anda.'));
    }

    // public function resetPassword($token)
    // {
    //     return view('member.auth.reset_password', compact('token'));
    // }

    // public function handleResetPassword(AdminAuthResetPasswordRequest $request)
    // {
    //     $admin = Admin::where([
    //         'email' => $request->email,
    //         'remember_token' => $request->token,
    //     ])->first();

    //     if (!$admin) {
    //         return back()->with('error', __('admin.Token is invalid !'));
    //     }

    //     $admin->password = bcrypt($request->password);
    //     $admin->remember_token = null;
    //     $admin->save();

    //     return redirect()->route('admin.login')->with('success', __('admin.Password reset successfully. Please login first'));
    // }

    public function logout(Request $request): RedirectResponse
    {
        Session::flush();

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('member.login');
    }
}

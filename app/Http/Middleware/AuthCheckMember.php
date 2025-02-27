<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthCheckMember
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::guard(getGuardNameMember())->check()) {
            return redirect()->route('member.login')->with('error', 'Anda tidak bisa mengakses halaman yang dituju. Silahkan login terlebih dahulu');
        } else {
            if (Auth::guard(getGuardNameMember())->user()->status_aktif == 0) {
                Auth::guard(getGuardNameMember())->logout();
                return redirect()->route('member.login')
                    ->with('error', 'Akun anda tidak aktif. Silahkan hubungi admin');
            } else if (!Auth::guard(getGuardNameMember())->user()->email_verified_at) {
                Auth::guard(getGuardNameMember())->logout();
                return redirect()->route('member.login')
                    ->with('error', 'Anda perlu mengonfirmasi akun Anda. Kami telah mengirimkan Anda kode aktivasi, silakan periksa email Anda');
            } else if (empty(getLoggedUserRole())) {
                Auth::guard(getGuardNameMember())->logout();
                return redirect()->route('member.login')
                    ->with('error', 'Anda tidak memiliki akses masuk ke dalam sistem ini');
            }
        }

        return $next($request);
    }
}

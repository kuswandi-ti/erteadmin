<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthCheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::guard(getGuardNameAdmin())->check()) {
            return redirect()->route('admin.login')->with('error', 'Anda tidak bisa mengakses halaman yang dituju. Silahkan login terlebih dahulu');
        } else {
            if (Auth::guard(getGuardNameAdmin())->user()->status_aktif == 0) {
                Auth::guard(getGuardNameAdmin())->logout();
                return redirect()->route('admin.login')
                    ->with('error', 'Akun anda tidak aktif. Silahkan hubungi admin');
            } else if (Auth::guard(getGuardNameAdmin())->user()->approved != 1) {
                Auth::guard(getGuardNameAdmin())->logout();
                return redirect()->route('admin.login')
                    ->with('error', 'Akun anda belum aktif. Perlu approve dari admin agar akun anda bisa digunakan. Silahkan hubungi admin');
            } else if (!Auth::guard(getGuardNameAdmin())->user()->email_verified_at) {
                Auth::guard(getGuardNameAdmin())->logout();
                return redirect()->route('admin.login')
                    ->with('error', 'Anda perlu mengonfirmasi akun Anda. Kami telah mengirimkan Anda kode aktivasi, silakan periksa email Anda');
            } else if (empty(getLoggedUserRole())) {
                Auth::guard(getGuardNameAdmin())->logout();
                return redirect()->route('admin.login')
                    ->with('error', 'Anda tidak memiliki akses masuk ke dalam sistem ini');
            }
        }

        return $next($request);
    }
}

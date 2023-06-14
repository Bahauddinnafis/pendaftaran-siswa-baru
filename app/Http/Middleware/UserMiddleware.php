<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::guard('user')->check()) {
            $user = Auth::guard('user')->user();
            if ($user->status_akun == 1 && $request->route()->getName() !== 'dashboard-siswa' ) {
                return redirect()->route('dashboard-siswa'); // Mengalihkan pengguna ke halaman dashboard
            }
            
            // Admin autentikasi berhasil
            return $next($request);
        }
    
        // Admin tidak autentikasi, arahkan ke halaman login admin
        return redirect()->route('login-form-user');
    }
}

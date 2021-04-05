<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        // $guards = empty($guards) ? [null] : $guards;

        // foreach ($guards as $guard) {
        //     if (Auth::guard($guard)->check()) {
        //         return redirect(RouteServiceProvider::HOME);
        //     }
        // }

        if (Auth::guard('pengelola')->check()) {
            $checkRole = Auth::guard('pengelola')->user();
            if ($checkRole->hasRole('superadmin')) {
                return redirect()->route('get.indexSuperadmin');
            }
        }elseif (Auth::guard('siswa')->check()) {
            return redirect()->route('get.indexSiswa');
        }

        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('alert-danger', 'login terlebih dahulu');
        }

        if (Auth::user()->role == 1) {
            return redirect()->route('customer')->with('alert-danger', 'user ini tidak terdaftar sebagai customer');
        }

        if (Auth::user()->role == 2) {
            return redirect()->route('petani')->with('alert-danger', 'user ini tidak terdaftar sebagai petani');
        }

        if (Auth::user()->role == 3) {
            return $next($request);
        }
    }
}

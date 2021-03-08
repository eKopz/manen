<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Petani
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
            return redirect()->route('customer')->with('alert-danger', 'user ini tidak terdaftar sebagai petani');
        }

        if (Auth::user()->role == 2) {
            return $next($request);
        }

        if (Auth::user()->role == 3) {
            return redirect()->route('admin')->with('alert-danger', 'user ini tidak terdaftar sebagai admin');
        }

        
    }
}

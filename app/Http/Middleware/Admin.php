<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Pastikan user sudah login
        if (!Auth::check()) {
            return redirect('login'); // Jika belum login, arahkan ke halaman login
        }

        // Periksa apakah user adalah admin
        if (Auth::user()->usertype !== 'admin') {
            return redirect('dashboard'); // Jika bukan admin, arahkan ke user dashboard
        }

        // Jika admin, lanjutkan permintaan
        return $next($request);
    }
}

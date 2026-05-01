<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckLogin
{
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check()) {
            return $next($request); // kalau SUDAH login, lanjutkan ✅
        } else {
            return redirect()->route('login')
                ->with('error', 'Anda belum login!'); // kalau BELUM login, redirect ✅
        }
    }
}
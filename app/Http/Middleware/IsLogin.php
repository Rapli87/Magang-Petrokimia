<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()) {
            if (auth()->user()->role == 1) {
                return redirect()->route('dashboard-admin');
            } else if (auth()->user()->role == 2) {
                return redirect()->route('dashboard-user');
        }else if (auth()->user()->role == null) {
            `print("anda belum login | silahkan login terlebih dahulu |Atau hubungi admin Sekolah Anda")`;
            
            
        }
    }
                
        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\front\HomeController;

class CheckAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $guard = null)
    {
    if (Auth::guard($guard)->check()) {
     // Kullanıcı zaten giriş yapmışsa, istediğiniz bir yere yönlendirilebilir
     return redirect()->route('admin.dashboard');
    }
    return $next($request);
    }
}
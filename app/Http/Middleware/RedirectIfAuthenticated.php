<?php

namespace App\Http\Middleware;

use App\Models\Admin;
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
     * @param  string|null $guard
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $guard = null)
    {

    if (Auth::guard($guard)->check() && Auth::user()->role_id == 1) {
                 return redirect()->route('admin.dashboard');

             } elseif(Auth::guard($guard)->check() && Auth::user()->role_id == 2){
                 return redirect()->route('commercial.dashboard');

             } elseif(Auth::guard($guard)->check() && Auth::user()->role_id == 3){
                 return redirect()->route('manager.dashboard');

             }else {
                 //return redirect()->route('pages.welcome');
                 return $next($request);
             }
    }
}

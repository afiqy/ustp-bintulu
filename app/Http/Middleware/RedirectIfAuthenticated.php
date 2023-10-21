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
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;
        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                if(Auth::check()){
                    $middleware = $request->route()->middleware()[0];
                    if($middleware == 'web' && ($request->route()->getName() == 'login' || $request->route()->getName() == 'register')){
                        return redirect()->back();
                    }else{
                        return $next($request);
                    }
                }
                    // return redirect(RouteServiceProvider::HOME);
            }
        }

        return $next($request);
    }
}

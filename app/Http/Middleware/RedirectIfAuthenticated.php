<?php

namespace App\Http\Middleware;

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
                // If the user is authenticated and trying to access the login or register page, redirect them to the home page.
                if ($request->route()->named('login') || $request->route()->named('register')) {
                    return redirect()->route('home');
                }
    
                // If the user is authenticated and trying to access any other route, redirect them back.
                return redirect()->back();
            }
        }

        // If the user is not authenticated, allow them to continue with the request.
        return $next($request);
    }
}

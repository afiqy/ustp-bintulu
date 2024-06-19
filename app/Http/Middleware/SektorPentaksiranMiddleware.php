<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SektorPentaksiranMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the authenticated user works in Sektor Perancangan
        if ($request->user()->sektor === 'Sektor Pentaksiran & Peperiksaan'|| $request->user()->jawatan === 'ADMIN') {
            return $next($request);
        }

        return response()->view('errors.sector_error');
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

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
            return redirect()->route('welcome');            
        } elseif (Auth::check() && Auth::user()->role != 'admin') {
            return redirect()->route('home');
        }

        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class Teacher
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
            return redirect()->route('login');
        }

        if (Auth::user()->type == 1) {
            return redirect()->route('Admin');
        }

        if (Auth::user()->type == 2) {
            return redirect()->route('Teacher');
        }

        if (Auth::user()->type == 3) {
            return $next($request); 

        }
    }
}

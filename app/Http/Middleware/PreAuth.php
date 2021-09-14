<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PreAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()){
            if (auth()->user()->role == 2) {
                return redirect('students/dashboard');
            }
            if (auth()->user()->role == 1) {
                return redirect('tutors/dashboard');
            }
            if (auth()->user()->role == 0) {
                return redirect('admin/dashboard');
            }
        }
        return $next($request);
    }
}

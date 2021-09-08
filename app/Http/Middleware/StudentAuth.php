<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class StudentAuth
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
        if (!auth()->user()){
            return redirect('student/login');
        }
        else{
            if (auth()->user()->role != 2) {
                return redirect('student/login')->with('error','Unathorized Access!');
            }
        }

        return $next($request);
    }
}

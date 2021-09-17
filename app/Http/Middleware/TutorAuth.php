<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TutorAuth
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
            return redirect('tutors/login');
        }
        else{
            if (auth()->user()->role != 1) {
                return redirect('tutors/login')->with('error','Unathorized Access!');
            }
        }
        return $next($request);
    }
}

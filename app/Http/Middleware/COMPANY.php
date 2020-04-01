<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class COMPANY
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
        if(!Auth::check()){
            return redirect()->route('login');
        }
        
        if(Auth::user()->role ==1){
            return redirect()->route('administrator.Adminhome');
        }

        if(Auth::user()->role ==2){
            return redirect()->route('Student.profile');
        }

        if(Auth::user()->role ==3){
            return redirect()->route('coordinator.CoordinatorHome');
        }

        if(Auth::user()->role ==4){
            return $next($request);
        }
    }
}

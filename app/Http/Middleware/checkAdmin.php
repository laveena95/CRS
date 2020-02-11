<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class checkAdmin
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
        $userRoles = Auth::user()->roles->pluck('name');
        if(!$collection->contains('Admin')){
            return redirect('about');
        };
        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class checkUser
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
        if(Auth::user()->hasAnyRole('1'))
        {
            return $next($request); 
        }
    }
}

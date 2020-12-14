<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class AdminMiddleware
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
        // checks is role is 'admin' and is 'active'
        if(Auth::user()->role == 'admin' && Auth::user()->status == 'active') {
            return $next($request);
        }
        else {
            abort(401, 'This action is unauthorized.');
        }
    }
}

<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class AuthenticateLogin
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
                //check if the user is authenticated
        if (!Auth::check()){
            //if not authenticate return to login page
            return redirect('/Login');
        }
        return $next($request);
    }
}

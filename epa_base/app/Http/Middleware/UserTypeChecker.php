<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class UserTypeChecker
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
    
        foreach(explode(',',$role) as $accountType) {
            if(Auth::user()->user_type_id == $accountType)
             return $next($request);
        } return redirect('/');
    }
}

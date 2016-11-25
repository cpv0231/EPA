<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use App\Website;
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
        if(strpos($request, 'admin_panel') == null){
            $data = Website::orderBy('created_at', 'desc')->first();
            if(!$data->is_enable){
                return redirect('website-maintenance');
            }
        } 

      return $next($request);
      
  }
}

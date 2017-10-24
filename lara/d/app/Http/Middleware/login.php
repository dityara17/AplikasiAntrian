<?php

namespace App\Http\Middleware;

use Closure;

class login
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
        $re = $next($request);
        $user = session('user');
        if ($user == null){
            return redirect('login');
        } else{
            return  $re;
        }
    }
}

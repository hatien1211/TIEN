<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class AdminLoginMiddleware
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

        if(Auth::check()){
            $users=Auth::user();
            if($users->quyen == 1){
                return $next($request);        
            }else{
                return redirect()->route('index');
            }
        }else{
            return redirect()->route('dangnhap');
        }
    }
}

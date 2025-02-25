<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::user()->role !=="user"){
            return  abort(404);
                 }
             if(!empty(Auth::user())){
                if(url()->current()==route('admin#loginPage')||url()->current()==route('admin#register')){
                    return back();
                }
            }
        return $next($request);
    }
}

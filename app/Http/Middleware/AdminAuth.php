<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!empty(Auth::user())){
            if(url()->current()==route('admin#loginPage')||url()->current()==route('admin#register')){
                return back();
            }
        }

        if(Auth::user()->role !=="admin"){
            return  abort(404);
                 }
                 return $next($request);
    }

}

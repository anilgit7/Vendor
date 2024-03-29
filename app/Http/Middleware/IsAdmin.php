<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            Session::flush();
            Auth::logout();
            return redirect()->route('home')->with(['warning'=>true,'message'=>'Unauthorized access attempt.']);
        }
        if(Auth::check()){
            if(Auth::user()->user_type==0){
                return $next($request);
            }
            if(Auth::user()->user_type==1){
                Session::flush();
                Auth::logout();
                return redirect()->route('home')->with(['warning'=>true,'message'=>'Unauthorized access attempt.']);
            }
            if(Auth::user()->user_type==2){
                Session::flush();
                Auth::logout();
                return redirect()->route('home')->with(['warning'=>true,'message'=>'Unauthorized access attempt.']);
            }
        }
        return redirect()->back()->with(['warning'=>true,'message'=>'Unauthorized access attempt.']);
    }
}

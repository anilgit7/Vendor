<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.home');
    }
    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect()->route("home");
    }
    public function userfront(){
        if(Auth::check()){
            // $ut = User::findOrFail(Auth::user()->id);
            $ut=Auth::user()->user_type;
            if($ut==0){
                return redirect()->route('admin.dashboard');
            }
            if($ut==1){
                return redirect()->route('merchant.dashboard');
            }
            if($ut==2){
                return redirect()->route('home');
            }
        }
        else{
            Session::flush();
            Auth::logout();
            return redirect()->route('home');
        }
    }
}

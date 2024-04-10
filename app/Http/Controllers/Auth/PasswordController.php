<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class PasswordController extends Controller
{
    public function update(Request $request){
        if($request->n_password !== $request->c_password){
            return back()->withInput()->with(['error'=>true,'message'=>'Password not matching.']);
        }
        $user_id = Auth::user()->id;
        $user = User::where('id',$user_id)->first();
        $user->password = Hash::make($request->n_password);
        $user->save();
        if($user->user_type==0){
            return redirect()->route('admin.dashboard')->with(['success' => true,'message' => 'Password changed successfully']);
        }
        if($user->user_type==1){
            return redirect()->route('merchant.dashboard')->with(['success' => true,'message' => 'Password changed successfully']);
        }
        if($user->user_type==2){
            return redirect()->route('user.dashboard')->with(['success' => true,'message' => 'Password changed successfully']);
        }
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function authenticate(Request $request)
    {
        $password = $request->password;
        $confirm_password = $request->password_confirmation;
        if($password === $confirm_password){
            if (strlen($password) >= 8) {
                
                $this->create_user($request);

                $credentials = $request->only('email', 'password');
        
                if (Auth::attempt($credentials)) {
                    // Authentication passed...
                    return redirect()->route('check.role');
                } else {
                    // Authentication failed...
                    return back()->withInput()->with(['error'=>true, 'message'=>'Invalid credentials.']);
                }
            }
            else{
                return back()->withInput()->with(['error'=>true,'message'=>'Password must be greater or equal to 8.']);
            }

        }
        else{
            return back()->withInput()->with(['error'=>true,'message'=>'Password not matching.']);
        }
        
    }

    function create_user($request){
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'user_type'=>$request['user_type'],
            'status' =>$request['status'],
            'phone_number'=>$request['phone_number'],
            'address' => $request['address'],
            'latitude' => $request['latitude'],
            'longitude' => $request['longitude']
        ]);
    }
}

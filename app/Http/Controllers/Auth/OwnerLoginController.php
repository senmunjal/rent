<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OwnerLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:owner')->except('logout');
    }

    public function showLoginForm(){
        return view('auth.login');
    }

    public function login(Request $request){
        $this->validate($request,[
            'email'=>'required|string|email',
            'password'=>'required|string|min:5'
        ]);
        if(Auth::guard('owner')->attempt(['email' => $request->email ,'password' => $request->password], $request->remember )){
            return redirect()->intended(route('owner.dashboard'));
        }
        return redirect()->back()->with($request->only('email','remember'));
    }

    public function logout(Request $request){
        
        Auth::guard('owner')->logout();
        return redirect('/admin');

    }
    
}

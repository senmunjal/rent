<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OwnerLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:owner');
    }

    public function showLoginForm(){
        return view('auth.register');
    }

    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //

    public function getLoginPage(){
        return view('auth.login');
    }

    public function login(Request $request){
        
        $credentials = $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if(Auth::attempt($credentials)){
            return redirect()->route('notes.index');
        }
        
        return back();
    }

    public function getRegisterPage(){
        return view('auth.register');
    }
}

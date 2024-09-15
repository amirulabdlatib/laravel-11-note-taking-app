<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

            $request->session()->regenerate();
            return redirect()->route('notes.index');
        }
        
        return back();
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/');
    }

    public function getRegisterPage(){
        return view('auth.register');
    }

    public function register(Request $request){
        $validated_data = $request->validate([
            'name' => 'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|confirmed'
        ]);


        $user = User::create([
            'name' =>$validated_data['name'],
            'email' =>$validated_data['email'],
            'password' =>HaSH::make($validated_data['password']),
        ]);

        Auth::login($user);
        $request->session()->regenerate();

        return redirect()->route('notes.index');
    }
}

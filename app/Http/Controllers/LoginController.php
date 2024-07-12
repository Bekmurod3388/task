<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use http\Env\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public function login(LoginRequest $request){
        if(Auth::attempt(['username'=>$request->username,'password'=>$request->password],$request->remember)){
                return redirect()->intended(route('dashboard'));
        }
        return redirect()->back()->with('error','Username or password is incorrect');
    }
    public function register(RegisterRequest $request){
        $user = User::create([
            'username'=>$request['username'],
            'password'=>Hash::make($request['password']),
        ]);
        auth()->login($user);
        return redirect()->intended('dashboard');
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}

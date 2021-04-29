<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RequestAuth;
use App\Models\User;

class AuthController extends Controller
{
    public function showlogin(){
        return view('login');
    }
    public function checklogin(RequestAuth $request){
        $dangnhap = $request->only('email', 'password');

        if(Auth::attempt($dangnhap, $request->has('rememberme'))){
            $request->session()->regenerate();

            return redirect()->intended('list');
        }
        return back()->withErrors([
            'email' => 'tài khoản hoặc mật khẩu sai',
        ]);
    }
}

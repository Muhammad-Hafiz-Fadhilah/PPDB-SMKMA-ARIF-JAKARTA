<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function postlogin(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('beranda');
        }

        return redirect('loginadmin');
    }


    public function logout(Request $request){

        Auth::logout();
        return redirect('loginadmin');       
    }
}

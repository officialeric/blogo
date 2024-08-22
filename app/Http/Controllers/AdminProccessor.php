<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class AdminProccessor extends Controller
{
    function index(){
        return view("admin.login");
    }

    function login(Request $request){
       $data = $request->only(["email","password"]);

       if(Auth::attempt($data)){
            return redirect()->intended(route("admin.home"));
       }

       return back()->withErrors(["email"=> "The provided credentials do not match our records."]);
    }
    function logout(Request $request){
        Auth()->logout();

        $request->session()->invalidate();

        $request->session()->regenerate();

        return redirect()->intended(route("admin.index"));
   }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index',[
            "title" => "Login"
        ]);
    }

    public function check(Request $request){
        $validate = $request -> validate([
            "email" => "required|email:dns!unique:users",
            "password"=>"min:4|max:255|required"
        ]);

        if (Auth::attempt($validate)) {
            $request->session()->regenerate();
            return redirect()->intended("/dashboard");
        }

        return back()->with("loginError", "Login Failed!");
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect("/login");

    }


}

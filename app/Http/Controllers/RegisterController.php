<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index', [
            "title" => "Register"
        ]);
    }

    public function store(Request $request){
        $validate = $request->validate([
            
            "name" => "required|max:255",
            "username" => "required| min:4 | max:255 | unique:users",
            "email" => "required | email:dns | unique:users",
            "password" => "required | min:4 | max:255"


        ]);

        $validate["password"] = bcrypt($validate["password"]);

        User::create($validate);

        return redirect("/login")->with("success","Registrasi berhasil! Silakan login");

    }
}

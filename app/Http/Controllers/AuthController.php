<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }
   
    public function welcome_post(Request $request){
        //dd($request->all());
        $firstName = $request["first"];
        $lastName = $request["last"];
        return view('welcome', compact('firstName','lastName'));
    }

    public function welcome($firstName,$lastName){
        return view('welcome', compact('firstName','lastName'));
    }

}

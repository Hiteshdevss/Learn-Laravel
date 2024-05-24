<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterationController extends Controller
{
    //
    public function index(){
        return view('layouts.form');
    }

    public function register(Request $request){
        $request ->validate([
            'name' =>'required',
            'email' =>'required|email',
            'password' => 'required|min:8',
        ]);
        return $request->all();
    }
}

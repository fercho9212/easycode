<?php

namespace App\Http\Controllers\Login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function login(){
      return view('autentication.login');
    }
    public function postLogin(Request $request){
      dd($request->all());
    }
}

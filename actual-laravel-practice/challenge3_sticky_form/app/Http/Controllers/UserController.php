<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function storeRegister(Request $request)
    {
        $email = $request->input("email");
        return view('home', ["email"=>$email]);
    }
}

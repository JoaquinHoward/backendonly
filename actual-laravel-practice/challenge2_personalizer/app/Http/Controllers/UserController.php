<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function greet(Request $request)
    {
        $user_name = $request->input ?? "stranger";

        return view("dashboard", ["user_name" => $user_name]);
    }
}

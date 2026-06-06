<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InspectorController extends Controller
{
    public function index(Request $request)
    {
        $ip_address = $request->ip();
        $method = $request->method();
        $browser = $request->header('User-Agent');
        return view("results", ["ip_address"=>$ip_address, "method"=>$method, "browser"=>$browser]);
    }
}

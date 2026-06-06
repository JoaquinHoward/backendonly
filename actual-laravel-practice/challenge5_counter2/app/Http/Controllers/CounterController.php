<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CounterController extends Controller
{
    public function increment(Request $request)
    {
        $views = $request->session()->increment("views");
        return view("index", ["views"=>$views]);
    }

    public function reset(Request $request)
    {
        $request->session()->forget("views");
        return redirect("/");
    }
}

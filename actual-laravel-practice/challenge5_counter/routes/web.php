<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CounterController;
Route::get('/', function () {
    return view('index');
});

Route::get("/", [CounterController::class, "increment"]);
Route::get("/reset", [CounterController::class, "reset"]);


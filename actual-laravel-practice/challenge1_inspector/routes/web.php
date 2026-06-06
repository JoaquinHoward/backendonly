<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InspectorController;
Route::get('/', [InspectorController::class, 'index']);
<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function index()
    {
        #call the api link, data object
        $call_weather_api = Http::get("https://api.open-meteo.com/v1/forecast?latitude=35.6762&longitude=139.6503&current_weather=true");
        #turned to PHP associative array but if used $call_weather_api->body(); it would be a json string not php assoc array
        $call_weather_api = $call_weather_api->json();

        return view("weather", ["weather"=>$call_weather_api]);
    }
}

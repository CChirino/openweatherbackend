<?php

namespace App\Http\Controllers;

use App\Models\Weather;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Traits\WeatherApiTrait;


class WeatherController extends Controller
{
    use WeatherApiTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {        

        $weatherCities = Weather::get();


        return $weatherCities;
         
    }

    public function humidityCity(Request $request)
    {        

        $selectionOfCity = $this->callApi($request);


        return $selectionOfCity;
         
    }

}

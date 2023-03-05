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
    public function index(Request $request)
    {        

        $weatherCities = Weather::get();


        return $weatherCities;
         
    }

    public function humidityCity(Request $request)
    {        

        $selectionOfCity = $this->callApi($request);


        return $selectionOfCity;
         
    }



    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Traits;
use App\Models\Weather;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

trait WeatherApiTrait {

    /**
     * Write code on Method
     *
     * @return response()
     */

     public function countriesWeatherSelection(Request $request){
        
        if(empty($request)){
            return response()->json([
                'Please introduce a Country'
           ], 404);   
        }

        $data = $request->validate([
            'city' => 'required'
        ]);

        $city = $data['city'];

        $cityInfo = Weather::where('city','LIKE',  '%'.$city.'%')->first();
        if(!$cityInfo){
            return response()->json([
                'The country introduce no exists, please try with another'
           ], 404);     
        }
        $getLatitude = $cityInfo['latitude'];
        $getLongitude = $cityInfo['longitude'];

        return response()->json([
           'latitude' => $getLatitude,
           'longitude' => $getLongitude 
       ], 201); 
    }

    public function callApi(Request $request){
        
        $dataOfCountry = $this->countriesWeatherSelection($request);
        $transformData =json_decode(json_encode($dataOfCountry), true);
        $latitudeCountry = $transformData['original']['latitude'];
        $longitudeCountry = $transformData['original']['longitude'];

        // Call API
        $key = config('services.owm.key');
        $response = Http::get("https://api.openweathermap.org/data/2.5/weather?lat=".$latitudeCountry."&lon=". $longitudeCountry."&lang=es"."&appid=".$key)
        ->json();

        // Update field humidity in DB
        $nameCity = $response['name'];
        $humidityCity = $response['main']['humidity'];
        $getCityData = Weather::where('city','LIKE',  '%'.$nameCity.'%')->first();
        $getCityData->humidity = $humidityCity;
        $getCityData->save();
        
        return $getCityData;
    }

    

}
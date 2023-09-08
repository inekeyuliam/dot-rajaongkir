<?php

namespace App\Services;
use App\City;
use App\Province;

use Illuminate\Support\Facades\Http;

class DatabaseDataSource
{
	public function getProvinceById($provinceId)
    {
        $province = Province::find($provinceId);
        return $province;
        // if (!$province) {
        //     return response()->json(['message' => 'Province not found'], 404);
        // }
        // return response()->json($province);
        
    }

    public function getCityById($cityId)
    {

        // Query the City model to find the city by ID
        $city = City::find($cityId);
        return $city;
        // if (!$city) {
        //     return response()->json(['message' => 'City not found'], 404);
        // }

        // return response()->json($city);
    }
}
<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class RajaOngkirService
{
    public function getProvinceById($provinceId)
    {
        $response = Http::get('https://api.rajaongkir.com/starter/province', [
            'id' => $provinceId,
        ]);
        var_dump($response->json());exit;
        return $response->json();
    }

    public function getCityById($cityId)
    {
        $response = Http::get('https://api.rajaongkir.com/starter/city', [
            'id' => $cityId,
        ]);

        return $response->json();
    }
}

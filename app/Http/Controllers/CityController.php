<?php

namespace App\Http\Controllers;
use App\City;
use App\Http\Resources\CityResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Services\DatabaseDataSource;

class CityController extends Controller
{
    protected $dataSource;

    public function __construct(DatabaseDataSource $dataSource)
    {
        $this->dataSource = $dataSource;
    }

    public function get_city()
    {
        $response   = Http::get("https://api.rajaongkir.com/starter/city",[
            'key' => '0df6d5bf733214af6c6644eb8717c92c',
        ]);
        $statusCode = $response->status();
        $headers = $response->headers();
        $body = $response->body();
        $provinces = json_decode($body);

        foreach($provinces->rajaongkir->results as $key => $value) {
            City::create([
                'name'=>  $value->province,
                'city_id'=>$value->city_id,
                'postal_code'=>$value->postal_code,
                'type'=>$value->type,
                'province_id'=>$value->province_id,
            ]);
        }
        return "DONE";

    }
    public function search(Request $request)
    {
        $cityId = $request->input('id');

        $city = $this->dataSource->getCityById($cityId);

        if (!$city) {
            return response()->json(['message' => 'City not found'], 404);
        }

        return new CityResource($city);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Province  $province
     * @return \Illuminate\Http\Response
     */
    public function show(Province $province)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Province  $province
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Province $province)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Province  $province
     * @return \Illuminate\Http\Response
     */
    public function destroy(Province $province)
    {
        //
    }
}

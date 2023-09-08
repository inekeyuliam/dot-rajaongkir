<?php

namespace App\Http\Controllers;

use App\Province;
use App\Http\Resources\ProvinceResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Services\DatabaseDataSource;

class ProvinceController extends Controller
{
    protected $dataSource;

    public function __construct(DatabaseDataSource $dataSource)
    {
        $this->dataSource = $dataSource;
    }

    public function get_province()
    {
        $response   = Http::get("https://api.rajaongkir.com/starter/province",[
            'key' => env('APIKEY_RAJAONGKIR'),
        ]);
        $statusCode = $response->status();
        $headers = $response->headers();
        $body = $response->body();
        $provinces = json_decode($body);

        foreach($provinces->rajaongkir->results as $key => $value) {
            Province::create([
                'name'=>  $value->province,
                'province_id'=>$value->province_id,
            ]);
        }
        return "DONE";

    }
    public function search(Request $request)
    {
        $provinceId = $request->input('id');

        $province = $this->dataSource->getProvinceById($provinceId);
        if (!$province) {
            return response()->json(['message' => 'Province not found'], 404);
        }

        return new ProvinceResource($province);
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
     * @return ProvinceResource
     */
    public function show(Province $province)
    {
       
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

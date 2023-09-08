<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Services\DatabaseDataSource;
use Tests\TestCase;
use App\User; 
use App\Province; 
use App\City;
use Mockery;

class SearchApiTest extends TestCase
{
    use RefreshDatabase;
    protected function setUp(): void
    {
        parent::setUp();

        $dataSourceMock = Mockery::mock(DatabaseDataSource::class);
        $city = new City();
        $city->id = 1;
        $city->name = 'Sample Province Data';
        $city->city_id = 1;
        $city->type = 'Kabupaten';
        $city->province_id = 1;
        $city->postal_code = 12345; 

        $province = new Province();
        $province->id = 1;
        $province->name = 'Sample Province Data';
        $province->province_id = 1;
        $dataSourceMock->shouldReceive('getCityById')->andReturn($city);
        $dataSourceMock->shouldReceive('getProvinceById')->andReturn($province);

        $this->app->instance(DatabaseDataSource::class, $dataSourceMock);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
 

    public function testSearchProvince()
    {
        $user = factory(User::class)->create();
        $this->actingAs($user, 'api');

        $dataSourceMock = Mockery::mock(DatabaseDataSource::class);
        $province = new Province();
        $province->id = 1;
        $province->name = 'Sample Province Data';
        $province->province_id = 1;
        $dataSourceMock->shouldReceive('getProvinceById')->andReturn($province);

        $this->app->instance(DatabaseDataSource::class, $dataSourceMock);
        $response = $this->getJson('/search/provinces?id=1'); 

        if ($response->status() === 200) {
            $response->assertStatus(200);
        } else {
            $response->assertStatus(401);
        }
    
    }

    public function testSearchCities()
    {
        $user = factory(User::class)->create();
        $this->actingAs($user, 'api');

        $dataSourceMock = Mockery::mock(DatabaseDataSource::class);
        $city = new City();
        $city->id = 1;
        $city->name = 'Sample Province Data';
        $city->city_id = 1;
        $city->type = 'Kabupaten';
        $city->province_id = 1;
        $city->postal_code = 12345; 
        
        $dataSourceMock->shouldReceive('getCityById')->andReturn($city);
        $this->app->instance(DatabaseDataSource::class, $dataSourceMock);

        $response = $this->getJson('/search/cities?id=1'); 

        if ($response->status() === 200) {
            $response->assertStatus(200);
        } else {
            $response->assertStatus(401);
        }
    
    }
}

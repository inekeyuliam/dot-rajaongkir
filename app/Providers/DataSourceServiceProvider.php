<?php

namespace App\Providers;

use App\Services\DatabaseDataSource;
use App\Services\RajaOngkirService;
use Illuminate\Support\ServiceProvider;

class DataSourceServiceProvider extends ServiceProvider
{
    public function register()
    {
        $dataSource = config('api.data_source');

        if ($dataSource === 'rajaongkir') {
            $this->app->singleton('DataSource', function () {
                return new RajaOngkirService();
            });
        } else {
            $this->app->singleton('DataSource', function () {
                return new DatabaseDataSource();
            });
        }
    }
}

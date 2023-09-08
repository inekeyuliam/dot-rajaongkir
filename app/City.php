<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
   
    
    protected $table = 'cities';
    protected $fillable = ['name', 'city_id', 'type', 'postal_code','province_id'];
}

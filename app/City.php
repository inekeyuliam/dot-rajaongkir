<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public $id;
    public $name;
    public $city_id;
    public $type;
    public $province_id;
    public $postal_code;

    public function __construct($id, $name, $city_id, $type, $province_id, $postal_code)
    {
        $this->id = $id;
        $this->name = $name;
        $this->city_id = $city_id;
        $this->type = $type;
        $this->province_id = $province_id;
        $this->postal_code = $postal_code;
    }
    
    protected $table = 'cities';
    protected $fillable = ['name', 'city_id', 'type', 'postal_code','province_id'];
}

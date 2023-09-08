<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    public $id;
    public $name;
    public $province_id;

    public function __construct($id, $name, $province_id)
    {
        $this->id = $id;
        $this->name = $name;
        $this->province_id = $province_id;
    }
    
    protected $table = 'provinces';
    protected $fillable = ['name', 'province_id'];
}

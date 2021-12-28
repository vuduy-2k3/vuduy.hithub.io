<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Khuvuc extends Model
{
    protected $table='khuvucs';
    protected $filltable=['ten_kv'];

    public function ctis()
    {
        # code...
        return $this->hasMany('App\Cti','id_kv','id_kv');
    }
    public function vieclams()
    {
        return $this->hasMany('App\Vieclam','id_kv','id_kv');
    }
}

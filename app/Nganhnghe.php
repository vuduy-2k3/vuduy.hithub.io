<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nganhnghe extends Model
{
    protected $table='nganhnghes';
    protected $filltable=['ten_nn'];

    public function vieclams()
    {
        return $this->hasMany('App\Vieclam','id_nn','id_nn');
    }
    public function ctis()
    {
        return $this->hasMany('App\Cti','id_nn','id_nn');
    }
}

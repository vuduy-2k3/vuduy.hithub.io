<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vieclam extends Model
{
    protected $table='vieclams';
    protected $filltable=['id_vl','ten_vl','id_cty','id_nn'];

    public function Cti()
    {
    	# code...
    	return $this->belongsTo('App\Cti','id_cty','id');
    }

    public function thongtinvieclams()
    {
        return $this->hasMany('App\Thongtinvieclam','id_vl','id');
    }

    public function Nganhnghe()
    {
        # code...
        return $this->belongsTo('App\Nganhnghe','id_nn','id_nn');
    }
    public function Khuvuc()
    {
        # code...
        return $this->belongsTo('App\Khuvuc','id_kv','id_kv');
    }
    public function ungtuyens()
    {
        return $this->hasMany('App\Ungtuyen','id_vl','id');
    }
}

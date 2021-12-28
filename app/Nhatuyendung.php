<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nhatuyendung extends Model
{
    protected $table='nhatuyendungs';
    protected $filltable=['id','id_user','id_cty','ten_ndk','chucvu_ndk','sdt_ndk','diachi_ndk'];

    public function User()
    {
    	# code...
    	return $this->belongsTo('App\User','id_user','id');
    }
    public function Cti()
    {
    	# code...
    	return $this->belongsTo('App\Cti','id_cty','id');
    }
    public function ungtuyens()
    {
        return $this->hasMany('App\Ungtuyen','id_ntd','id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cti extends Model
{
	
	protected $table='ctis';
    protected $filltable=['logo','ten_cty','email_cty','sdt','diachi'];

    public function nhatuyendungs()
    {        
        return $this->hasMany('App\Nhatuyendung','id_cty','id');
    }
    public function khuvucs()
    {
    	return $this->belongsTo('App\Khuvuc','id_kv','id_kv');
    }
    public function vieclams()
    {
        return $this->hasMany('App\Vieclam','id_cty','id');
    }
    public function users()
    {
        return $this->belongsTo('App\User','id','id');
    }
    public function ungtuyens()
    {
        return $this->hasMany('App\Ungtuyen','id_ntd','id');
    }
    public function nganhnghes()
    {
        return $this->belongsTo('App\Nganhnghe','id_nn','id_nn');
    }
}

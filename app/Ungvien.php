<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ungvien extends Model
{
    protected $table='ungviens';
    protected $filltable=['id','id_user','hinhanh','gioitinh','ngaysinh','sdt','diachi'];

    public function User()
    {
    	# code...
    	return $this->belongsTo('App\User','id_user','id');
    }
}

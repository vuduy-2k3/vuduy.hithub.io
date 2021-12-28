<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thongtinvieclam extends Model
{
    protected $table='thongtinvieclams';
    protected $filltable=['id','ngayhethan','mucluong','tinhchat','mota','yeucau','soluong','diachi','bangcap','kinhnghiem','chuyenmon','vitri','chucvu','gioitinh','tuoi'];

    public function Vieclam()
    {
    	# code...
    	return $this->belongsTo('App\Vieclam','id_vl','id');
    }
}

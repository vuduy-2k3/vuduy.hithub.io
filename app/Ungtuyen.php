<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ungtuyen extends Model
{
    public function User()
    {
    	# code...
    	return $this->belongsTo('App\User','id_user','id');
    }
    public function Vieclam()
    {
    	# code...
    	return $this->belongsTo('App\Vieclam','id_vl','id');
    }
    public function Cti()
    {
    	# code...
    	return $this->belongsTo('App\Cti','id_ntd','id');
    }
}

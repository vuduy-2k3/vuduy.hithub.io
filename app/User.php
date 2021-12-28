<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;


    protected $table='users';
    protected $filltable=['name'];

    public function ungviens()
    {
        return $this->hasMany('App\Ungvien','id_user','id');
    }

    public function nhatuyendungs()
    {
        # code...
        return $this->hasMany('App\Nhatuyendung','id_user','id');
    }
    public function ctis()
    {
        # code...
        return $this->hasMany('App\Cti','id','id');
    }
    public function ungtuyens()
    {
        # code...
        return $this->hasMany('App\Ungtuyen','id_user','id');
    }
}

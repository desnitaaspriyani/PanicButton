<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $fillable=['id_plg','nm_plg','alamat','no_telp'];

    public function barang(){
    	return $this->hasMany('App\Barang','kd_barang','id');
    }
}

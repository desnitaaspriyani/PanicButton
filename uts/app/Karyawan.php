<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $fillable=['id_kry','nm_kry','alamat','no_telp'];


    public function transaksi(){
    	return $this->hasMany('App\Transaksi','id_trans','id');
    }

    public function barang(){
    	return $this->hasMany('App\Barang','kd_barang','id');
    }
}

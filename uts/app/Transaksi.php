<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable=['id_trans','id_kry','id_plg','kd_barang','tgl_trans','jmlh_barang','hrg_jual','total_harga'];


    public function karyawan(){
    	return $this->belongsTo('App\Karyawan','id_kry','id');
    }

    public function pelanggan(){
    	return $this->belongsTo('App\Pelanggan','id_plg','id');
    }

    public function barang(){
    	return $this->belongsTo('App\Barang','kd_barang','id');
    }
}
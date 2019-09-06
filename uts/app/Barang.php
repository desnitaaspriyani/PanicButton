<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable=['kd_barang','nm_barang','stok','hrg_beli','total_beli','hrg_jual'];

    public function karyawan(){
    	return $this->belongsTo('App\karyawan','id_kry','id');
    }

    public function pelanggan(){
    	return $this->belongTo('App\Pelanggan','id_plg','id');
    }

    //model 
	public function barang($page, $pages)
	{
	    return DB::table('barangs')
	                ->select('stok', 'hrg_beli')
	                ->count();
	}
}

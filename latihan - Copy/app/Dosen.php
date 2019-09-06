<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table='dosen';
    protected $fillable=['nama','nip','prodi','email','nidn','tgl_lhir'];
}

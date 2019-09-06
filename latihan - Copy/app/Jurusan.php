<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
  protected $table='jurusan';
  protected $fillable=['jurusan','prodi','nm_kaprodi','jum_mhs','jum_pengajar'];
}

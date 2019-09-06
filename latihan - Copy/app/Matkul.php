<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    protected $table='matkul';
    protected $fillable=['matkul','sks','nm_dosen'];
}

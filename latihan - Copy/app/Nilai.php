<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
  protected $table='nilai';
  protected $fillable=['nim','matkul','uts','uas'];
}

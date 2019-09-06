<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Dosen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('dosen', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nama');
          $table->string('nip');
          $table->string('prodi');
          $table->string('email');
          $table->string('nidn');
          $table->date('tgl_lhir');
          $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_trans');
            $table->unsignedInteger('id_kry');
            $table->unsignedInteger('id_plg');
            $table->unsignedInteger('kd_barang');
            $table->date('tgl_trans');
            $table->integer('jmlh_barang');
            $table->integer('hrg_jual');
            $table->integer('total_harga');
            $table->foreign('id_kry')->references('id')->on('karyawans');
            $table->foreign('id_plg')->references('id')->on('pelanggans');
            $table->foreign('kd_barang')->references('id')->on('barangs');
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
        Schema::dropIfExists('transaksis');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pembelian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembelian', function (Blueprint $table) {
            $table->increments('id');
            $table->string('harga');
            $table->string('jumlah');
            $table->string('total_pembayaran');
            $table->string('tanggal_bayar');
            $table->string('id_petani');
            $table->string('id_pembeli');
            $table->string('nama_barang');
            $table->rememberToken();
            $table->timestamps();
        });//
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

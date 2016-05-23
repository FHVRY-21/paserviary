<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cart extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('cart', function (Blueprint $table) {
        $table->increments('id');
            $table->string('harga');
            $table->string('jumlah');
            $table->string('status_pembayaran');
            $table->string('status_role');
            $table->string('tanggal_bayar');
            $table->string('id_petani');
            $table->string('id_pembeli');
            $table->string('nama_barang');
            $table->string('no_rekening');
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

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Prdks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prdks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_barang');
            $table->string('harga');
            $table->string('jumlah');
            $table->string('satuan');
            $table->string('tgl_post');
            $table->string('kategori');
            $table->string('desr');
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

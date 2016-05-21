<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ptnkp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ptnkp', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_log');
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('alamat');
            $table->string('bio');
            $table->string('no_telp', 13);
            $table->rememberToken();
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

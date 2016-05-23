<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function(Blueprint $table) {
            $table->increments('id');
             $table->integer('id_log');
            $table->string('nama_depan');
            $table->string('nama_belakang');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('alamat');
            $table->string('role');
            $table->string('no_telp', 13);
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert(
            array(
                'email' => 'fahviary21@gmail.com',
                'password' => \Hash::make('123'),
                'role'  => 'User'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
;
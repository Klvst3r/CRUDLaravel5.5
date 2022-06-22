<?php

use Illuminate\Support\Facades\Schema;
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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id'); //Integer unsigned - Autoincrement
            $table->string('name'); //varchar
            $table->string('email')->unique(); //varchar - Unique
            $table->string('profesion', 100)->nullable(); // columna con 100 car y puede ser o no opcional de acuerdo a lo resgistrado.Es opcional que pueda o no tener profesion
            $table->string('password'); 
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
        Schema::dropIfExists('users');
    }
}

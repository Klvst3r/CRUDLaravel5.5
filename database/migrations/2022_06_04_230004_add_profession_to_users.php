<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProfessionToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('users', function (Blueprint $table){
<<<<<<< HEAD:database/migrations/2022_06_01_172104_add_profession_to_users.php
        $table->string('profession', 50)->nullable()->after('password');
=======
         $table->string('profession', 50)->nulltable()->after('password');
>>>>>>> main:database/migrations/2022_06_04_230004_add_profession_to_users.php
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table){
            $table->dropColumn('profession');
        });
    }
}

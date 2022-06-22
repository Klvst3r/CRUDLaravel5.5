<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;        

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /*DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        
        DB::table('professions')->truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');*/

        //Primera opcion si los datos no son introducidos por el usuario final
        //DB::insert('INSERT INTO professions (title) VALUES ("Desarrollador back-end")');
        

        //Segunda opcion, con un solo parametro
        //DB::insert('INSERT INTO professions (title) VALUES (?)', ['Desarrollador back-end']);
        

        //Tercera opcion; cuando se tiene mucho parametros
        /*  DB::insert('INSERT INTO professions (title) VALUES (:title)', [
        'title'=>'Desarrollador Back-end'
        ]);
        */
       
       //Cuarta opción definitiva: Insercion de registros en la tabla Professions
        DB::table('professions')->insert([
            'title' => 'Back-end developer'
        ]);

        DB::table('professions')->insert([
            'title' => 'Front-end developer'
        ]);

        DB::table('professions')->insert([
            'title' => 'Web Designer'
        ]);
    }
}

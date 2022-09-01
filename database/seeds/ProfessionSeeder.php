<?php

//Para Tema 30 
//con alias 
//use App\Profession as Profesion;
///use App\Profession;
///
//Cuando se Agrega la subcarpeta Models que se movio el Modelo en la subcarpeta
use App\Models\Profession;

// Hasta tema 29
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

        /*******  Tema del constructor de consultas de SQL de Laravel hasta el tema 29. ejecutado *******/

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
       /*
        DB::table('professions')->insert([
            'title' => 'Back-end developer'
        ]);

        DB::table('professions')->insert([
            'title' => 'Front-end developer'
        ]);

        DB::table('professions')->insert([
            'title' => 'Web Designer'
        ]);*/

        /*******  Tema del constructor de consultas de SQL de Laravel hasta el tema 29. ejecutado *******/


        /*******  Inicio del Tema 30. Eloquent, el ORM de Larael *******/

         //Ejemplo de funcionalidad con SQL directo en los Seeders
            /*  DB::insert('INSERT INTO professions (title) VALUES (:title)', [
            'title'=>'Desarrollador Back-end'
            ]);



            DB::table('professions')->insert([
                'title' => 'Back-end developer'
            ]);

            */
           
           // Primera Opcion ejecutada
           // ---------------------
           
         /*  \App\Profession::create([
                'title' => 'Back-end developer',
           ]);

            DB::table('professions')->insert([
                'title' => 'Front-end developer'
            ]);

            DB::table('professions')->insert([
                'title' => 'Web Designer'
            ]);*/

            // ---------------------
            

            // 2da Opcion ejecutada
            // ---------------------
            /*\App\Profession::create([
                'title' => 'Back-end developer',
                ]);

            \App\Profession::create([
                'title' => 'Front-end developer'
                ]);

            \App\Profession::create([
                'title' => 'Web Designer'
                ]);*/
            // ---------------------
            // 
            // 3da Opcion ejecutada: Importar la clase que se repite
            // ---------------------

            /* Se comentan para ejecutar seccion 34 */

            
            Profession::create([
                'title' => 'Back-end developer',
                ]);

            Profession::create([
                'title' => 'Front-end developer'
                ]);

            Profession::create([
                'title' => 'Web Designer'
                ]);

            
            /*Termina sección 34  */


            // ---------------------
            // 
                  // 4ta Opcion ejecutada: Alias con la clase
            // ---------------------
           /* Profesion::create([
                'title' => 'Back-end developer',
                ]);

            Profesion::create([
                'title' => 'Front-end developer'
                ]);

            Profesion::create([
                'title' => 'Web Designer'
                ]);*/
            // ---------------------

            // 

        /*******  Tema 30. Eloquent, el ORM de Larael *******/


        /* Seccion 34 con el Model Factory */

        //factory(Profession::class, 17)->create();

        //EStgo tamien puedo lograrlo ejecutando el metodo time
        factory(Profession::class)->times(17)->create();

        /* Seccion 34 con el Model Factory */

    }
}

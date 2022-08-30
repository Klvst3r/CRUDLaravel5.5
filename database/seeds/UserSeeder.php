<?php

use App\User;

//Para la opcion 17 se agrega el Modelo de Profession al principio
use App\Profession;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Opcion 1: No es segura por que puede existir inyeccion de SQL
        //$professions = DB::select('SELECT id FROM professions WHERE title = "Back-end developer"');
        //dd($professions);
        ////Para mostrar resultados de la consulta
        //dd($professions[0]->id);
        

        //Opcion 2: Utilizando marcador, utilizando el dirver de PHP PDO, consutruir la consulta de forma mas segura
        //$professions = DB::select('SELECT id FROM professions WHERE title = ?',['Back-end developer']);
        //dd($professions[0]->id);
        
        //Opcion 3: Traer solo un usuario
        //$professions = DB::select('SELECT id FROM professions WHERE title = ? LIMIT 0,1',['Back-end developer']);
        //Devolvemos un array con un objeto ocn la propiedad id y valor 1
        //dd($professions);


        //Opcion 4: Quitamos el condicional WHERE, sin pasar el array
        //$professions = DB::select('SELECT id FROM professions LIMIT 0,1');
        //Se obtiene el mismo resultado de la opcion 3
        //dd($professions);
       
       

       /*
       Utilizando el constructor de consultas vamos a trabvajhar con la tabla de profesiones, seleccionando unicamente el campo id
       Obteniendo un solo resultado mediante el metodo take, ahora se llama al metodo get() para opbtener los resultados.
        */
       //$professions = DB::table('professions')->select('id')->take(1)->get();
       //Para obtener el objeto de resultado
       //dd($professions);
       //Se obtiene la primera profesión
       /*
       Utilizar first() es mas legible que hacerlo como
        //professions[0]
        */
       
       //dd($professions->first()->id); 
       

       /* Opcion 5:
       Sinb embargo otra de las limitaciones que teniamos anteriormente al escribir la consulta SQL de forma manual, es que se queria obtener un solo fresultado, ahora vemos como obtener un solo resultado y no una colección de resultados, utilizando el constructor de consultas de SQL:
       */
       //$professions = DB::table('professions')->select('id')->first();
       //Se visualiza resultado de la consola, podremos ver que estamos obteniendo un objeto en lugar de un array o colección con un objeto
       //dd($professions); 

/*
       DB::table('users')->insert([
            'name' => 'Klvst3r',
            'email' => 'klvst3r@email.com',
            'password' => bcrypt('laravel'),
            //'profesion_id' => $professions[0]->id, eliminamos esta opcion por que no es una coecion de array que contiene un listado de objetos
            'profesion_id' => $professions->first()->id,

       ]);*/  

            /*Opcion 6, 
            por que a onotros nos interesa en este momento trabajar con una sola profesión, por ello ahora ya no vamos a necesitar llamar a first dentro de professions, sino que vamos a utilizar unicamente, profesions->id, y como ahora tenemos una sola profesión y no un listado de profesiones ahora se va a renombrar la variable para que sea en singular. 
            */

            //$profession = DB::table('professions')->select('id')->first();

            /*
            
            Hasta aca despues de ejecutar los seeders en la tabla de usuarios ya esta relacionado con el id de la profesion condicente
             */
            



            /*Consultas con condicionales (WHERE)
            -----------------------------------
            */
           
            /*
            Opcion 7:
            Podemos llamar al metodo "where()" pasando como primer argumento el nombre de la columna, como segundo argumento el operador de comparación y como tercer argumento el valor que queremos encontrar, en este caso: "Back-end developer".

             */
       
            //$profession = DB::table('professions')->select('id')->where('title', '=', 'Back-end developer')->first();
            //dd($profession); 


            /*
            Opcioon 8 Seleccionando mas campos

             */
            
            /*$profession = DB::table('professions')->select('id', 'title')->where('title', '=', 'Back-end developer')->first();
            dd($profession); 
            */
           


           /*
           Opcion 9: Seleccionar todas las columnas
            */
           //$profession = DB::table('professions')->where('title', '=', 'Back-end developer')->first();
            //dd($profession); 

           /*
           Opcion 10: Seleccionar todas las columnas omitioendo el operador =
            */
           /*$profession = DB::table('professions')->where('title', 'Back-end developer')->first();
            dd($profession); */


            /*
           Opcion 11: Seleccionar todas las columnas añadiendo un array
            */
          /* $profession = DB::table('professions')
           ->select('id')
           ->where(['title' => 'Back-end developer'])
           ->first();

            dd($profession); */


            /*
           Opcion 12: solamente se quiere obtener el id de la profesión, se puede hacer si se llama al metodo value() en lugar del metodo first(), pasando como argumento el nombre de la columna (id) de la cual queremos obtener su valor
            */
          /* $profession = DB::table('professions')
           ->where(['title' => 'Back-end developer'])
           ->value('id');
           
            dd($profession); 
            */

             /*
           Opcion 13: 
          Por lo cual ahora puedo renombrar la variable a "professionId" y tambien se debe hacer en la inserción del usuario en la tabla de usuarios. No se va a trabajar con un objeto sino el Id directamente. Se puede simplificar un poco el condicional, ya que no se utiliza el array sino se pasan los valores de la siguiente manera
            */
           /*$professionId = DB::table('professions')
           ->where('title', 'Back-end developer')
           ->value('id');*/
           
            //dd($profession); 
            

          /*
          Opcion 14: 
          Metodos Magicos, con el metodo "wheretitle" no esta definido si se ejecuta de la siguiente manera, Laravel entendera que title es el nombre de la columna y entonces el primer argumento va a 
            */
         /*  $professionId = DB::table('professions')
           ->whereTitle('Back-end developer')
           ->value('id');*/



           /*Inserción de valores en la tabla de Usuarios posterior a la obtención del id de la tabla de profesiones*/

           /*Antes de Opcion 14
            DB::table('users')->insert([
                        'name' => 'Klvst3r',
                        'email' => 'klvst3r@email.com',
                        'password' => bcrypt('laravel'),
                        //Iniciando con el constructor de consultas de Laravel
                        //'profession_id' => $profession[0]->id,
                        
                        //Segunda opcion para obtener el primer elemento del objeto de la coleccion de profesiones  y no un array como listado de objetospor ellos
                        //Para obtener un solo resultado con opcion 5 en la consulta,
                        //'profession_id' => $profession->first()->id,                        
                        
                        //obtenemos un objeto en luhar de un array, opcion 5, ya no vamos a necesitar llamar a first dentro de professions sino que
                        //vamos a utilizar unicamente profesions()->id, 
                        //Opcion 6
                        //Ya que tenemos ahora una sola profesió y no un listado de profesiones, por ello vamos arenombrar la variable //para que sea en singular.
                        //'profession_id' => $profession->id,
                        //La Linea anterior es hasta la opcion 12
                        // opci[on 13
                        'profession_id' => $professionId
                        
                   ]);
            */
            /*********** Hasta Sección 29*********************/
            // opci[on 15
            /*
             DB::table('users')->insert([
                        'name' => 'Klvst3r',
                        'email' => 'klvst3r@email.com',
                        'password' => bcrypt('laravel'),
                        'profession_id' => DB::table('professions')->whereTitle('Back-end developer')->value('id')
                        
                   ]);
            */
            /*********** Hasta Sección 29*********************/

            /*********** Seccion 30 Eloquent*********************/
            // Opcion 16 resgitarndo usuarios y Profesiones con el ORM de Eloquent 
         /*   $professionId = DB::table('professions')
           ->where('title', 'Back-end developer')
           ->value('id');

            User::create([
                        'name' => 'Klvst3r',
                        'email' => 'klvst3r@email.com',
                        'password' => bcrypt('laravel'),
                        'profession_id' => $professionId
                   ])*/;


            // Opcion 17 consultas a la BD
            $professionId = \App\Profession::where('title', 'Back-end developer')->value('id');

            /*
            User::create([
                        'name' => 'Klvst3r',
                        'email' => 'klvst3r@email.com',
                        'password' => bcrypt('laravel'),
                        'profession_id' => $professionId,
                        'is_admin' => true,
                   ]);
            */

            /* Sección 34. Uso de model fctory ´*/

            /*    factory(User::class)->create([
                        'name' => 'Klvst3r',
                        'email' => 'klvst3r@email.com',
                        'password' => bcrypt('laravel'),
                        'profession_id' => $professionId,
                        'is_admin' => true,
                   ]);
            */

            
            //Segunda forma de agregar usuarios de forma aleatoria
            /*
            factory(User::class)->create([
                        'email' => 'klvst3r@email.com',
                        'password' => bcrypt('laravel'),
                        'profession_id' => $professionId,
                        'is_admin' => true,
                   ]);


            factory(User::class)->create([
                'profession_id' => $professionId
            ]);


            factory(User::class)->create();
            */

            //Insertando 50 registros 

            
            factory(User::class)->create([
                        'name' => 'Klvst3r',
                        'email' => 'klvst3r@email.com',
                        'password' => bcrypt('laravel'),
                        'profession_id' => $professionId,
                        'is_admin' => true,
                   ]);

            factory(User::class)->create([
                'profession_id' => $professionId
            ]);


            factory(User::class, 48)->create();





            /* Sección 34. Uso de model fctory ´*/


            /*********** Seccion 30 Eloquent*********************/

            /*********** Seccion 32 Eloquent*********************/
             /***********Se agregan dos usuarios mas*********************/


             // En la seccion 34. se Eliminan estos dos usuarios por que se cean de forma aleatoria con los Model Factories

             /*
              User::create([
                        'name' => 'Alizeth Sofia',
                        'email' => 'alizh@email.com',
                        'password' => bcrypt('laravel'),
                        'profession_id' => $professionId
                   ]);


               User::create([
                        'name' => 'Josue Rodrigo',
                        'email' => 'josh@email.com',
                        'password' => bcrypt('laravel'),
                        'profession_id' => null
                   ]);

              */
            /*********** Seccion 30 Eloquent*********************/


    }
}

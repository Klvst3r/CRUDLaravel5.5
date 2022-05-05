<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        //$users = User::all();
        
       /* $users = [
            'Bill',
            'Ellie',
            'Joel', 
            'Tess',
            'Tommy',
            '<script>alert("Clicker")</script>'
        ];*/

        //return 'Usuarios';
        
        //Forma 1 - Array asociativo
        /*
        return view('users', [
            'users' => $users,
            'title' => 'Listado de usuarios'


        ]);
        */
       
       //Forma 2 - Metodo with - encadenado
       
       /* return view('users')->with([
            'users' => $users,
            'title' => 'Listado de usuarios'
        ]);*/

        //Encadenando las variables individualmente

         /*return view('users')
         ->with('users', $users) 
         ->with('title', 'Listado de usuarios');
            */
    // Forma 3 - Paso de valores en variables locales

         //Una segunda variable

         //$title = 'Listado de usuarios';

       /* return view('users', [
         'users' => $users, 
         'title' => $title
        ]);*/
        
        //var_dump(compact('title', 'users')); die();

       // dd(compact('title', 'users')); 

        //return view('users', compact('title', 'users'));

        // 1. Cambbio
        /*
         $users = [
            'Bill',
            'Ellie',
            'Joel', 
            'Tess',
            'Tommy',
            '<script>alert("Clicker")</script>'
        ];

        $title = 'Listado de usuarios';        
    
        return view('users', compact('title', 'users'));        
        */
              
       //2do Cambio
/*       if(request()->has('empty')){
            $users = [];
       } else {
             $users = [
                'Bill',
                'Ellie',
                'Joel', 
                'Tess',
                'Tommy'
                
            ];
       }
       
        $title = 'Listado de usuarios';        
    
        return view('users', compact('title', 'users'));   */     

        //3r Cambio
        //Primera verificación
      /*  $users = [
                'Bill',
                'Ellie',
                'Joel', 
                'Tess',
                'Tommy'
                
            ];
       
       
        $title = 'Listado de usuarios';        
    
        return view('users', compact('title', 'users'));        */


        //Segunda verificación
         if(request()->has('empty')){
            $users = [];
       } else {
             $users = [
                'Bill',
                'Ellie',
                'Joel', 
                'Tess',
                'Tommy'
                
            ];
       }
       
        $title = 'Listado de usuarios';        
    
        return view('users.index', compact('title', 'users'));


               
        
    }

    public function show($id)
    {
       return view('users.show', compact('id'));
       
       //return "Mostrando detalles del usuario: {$id}";  
    }

    public function create()
    {
          return 'Crear un nuevo usuario';
    }
}

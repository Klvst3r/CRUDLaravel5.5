<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        //$users = User::all();
        
        $users = [
            'Bill',
            'Ellie',
            'Joel', 
            'Tess',
            'Tommy',
            '<script>alert("Clicker")</script>'
        ];

        //return 'Usuarios';
        
        //Forma 1 - Array asociativo
        /*
        return view('users', [
            'users' => $users,
            'title' => 'Listado de usuarios'


        ]);
        */
       
       //Forma 2 - Metodo with - encadenado
       
        return view('users')->with([
            'users' => $users,
            'title' => 'Listado de usuarios'
        ]);
       
        
    }

    public function show($id)
    {
       return "Mostrando detalles del usuario: {$id}";  
    }

    public function create()
    {
          return 'Crear un nuevo usuario';
    }
}

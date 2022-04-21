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
        ];

        return 'Usuarios';
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

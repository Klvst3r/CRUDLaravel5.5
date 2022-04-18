<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WellcomeUserController extends Controller
{
    public function index($name, $nickname = null)
    {
        $name = ucfirst($name);

        if ($nickname){
            return "Bienvenido {$name}, tu nombre clave es: {$nickname}";
        }else{
            return "Bienvenido {$name}";
        }
    }
}

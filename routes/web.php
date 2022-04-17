<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function(){
    return 'Home';
});

Route::get('/usuarios', 'UserController@index');

/*
Route::get('/usuarios/detalles', function(){
    return 'Mostrando detalles del usuario: '.$_GET['id'];
});
 */

Route::get('/usuarios/nuevo', function(){
   return 'Crear unuevo usuario';
});

Route::get('/usuarios/{id}', function($id){
   return "Mostrando detalles del usuario: {$id}";
    })->where('id', '[0-9]+');   

/*Route::get('/saludo/{name}/{nickname}', function($name, $nickname){
    return "Bienvenido {$name}, tu nombre clave es: {$nickname}";
});*/

Route::get('/saludo/{name}/{nickname?}', function($name, $nickname = null){

        $name = ucfirst($name);

        if ($nickname){
            return "Bienvenido {$name}, tu nombre clave es: {$nickname}";
        }else{
            return "Bienvenido {$name}";
        }
    });
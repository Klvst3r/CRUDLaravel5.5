<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /** @test */
    //Listado de usuarios
    function it_shows_the_users_list()
    {
         $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('Listado de usuarios')
            ->assertSee('Joel')
            ->assertSee('Ellie');

    }


    //Mostramos un mensaje por defecto si la lista esta vacia
     function it_shows_a_default_message_if_the_users_list_is_empty()
    {
         $this->get('/usuarios?empty ') //Pasamos un array vacio a la vista
            ->assertStatus(200)
            ->assertSee('No hay usuarios registrados.')
            ->assertSee('Joel')
            ->assertSee('Ellie');

    }   
     

     function test_it_loads_the_users_list_page()
    {
       // $this->assertTrue(true);
         $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('Listado de usuarios');

    }

    /** @test */
    function it_loads_the_users_details_page()
    {
        $this->get('/usuarios/5')
            ->assertStatus(200)
            ->assertSee('Mostrando detalles del usuario: 5');
    }

    function it_loads_the_new_users_page(){

        $this->withoutExceptionHandling();

        $this->get('/usuarios/nuevo')
            ->assertStatus(200)
            ->assertSee('Crear nuevo usuario');
    }
}

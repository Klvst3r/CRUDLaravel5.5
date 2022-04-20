<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /**  @test  */
    function it_welcome_users_with_nickname()
    {
        $this->get('/saludo/Raul/Klvst3r')
            ->assertStatus(200)
            ->assertSee('Bienvenido Raul, tu nombre clave es: Klvst3r');
    }

    /**  @test  */
    function it_welcome_users_without_nickname()
    {
        $this->get('/saludo/Raul')
            ->assertStatus(200)
            ->assertSee('Bienvenido Raul');
    }
}

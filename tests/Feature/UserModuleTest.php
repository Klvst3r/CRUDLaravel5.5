<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /**
     *
     * @test void
     */
    public function test_it_loads_the_users_list_page()
    {
       // $this->assertTrue(true);
         $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('Usuarios');
    }
}

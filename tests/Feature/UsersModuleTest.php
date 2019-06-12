<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    /** @test */
    function testExample()
    {

        $this->get('/usuarios')
            ->assertStatus(200);
    }

    /** @test */
    function if_found_user_details(){
        $this->get('/usuarios/5')
            ->assertStatus(200)
            ->assertSee("Mostrando detalles del coso: 5");
    }

    function editar_usuarios(){
        $this->get('/usuarios/texto/edit')
            ->assertStatus(200)
            ->assertSee('Va a editar el usuario: ');
    }
}

<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserModuleTest extends TestCase
{
    /** @return void */
    function testItLoadTheUserListPage()
    {
        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('Listado de usuarios')
            ->assertSee('pedro')
            ->assertSee('jose')
            ->assertSee('juan')
            ->assertSee('ellie')
            ->assertSee('pacheco');
    }
     /** @return void */
     function testItEmptyTheUserListPage()
     {
         $this->get('/usuarios?empty')
             ->assertStatus(200)
             ->assertSee('No hay usuarios registrados');
     }
    /** @return void */
    function itsLoadUserDertailsPage(){
        $this->get('/usuarios/5')
        ->assertStatus(200)
        ->assertSee('mostrando detalle del id 5');
    }
    /** @return void */
    function itsLoadNewUserPage(){
        $this->get('/usuarios/nuevo')
        ->assertStatus(200)
        ->assertSee('crear nuevo usuario');
    }
    /** @return void */
    function itsLoadUserEditPage(){
        $this->get('/usuarios/edit')
        ->assertStatus(200)
        ->assertSee('Editar usuario');

    }


}

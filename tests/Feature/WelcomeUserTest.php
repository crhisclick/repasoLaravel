<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WelcomeUserTest extends TestCase
{
    /** @test */
    public function itsWelcomeUserWithNickname()
    {
        $this->get('/saludo/crhistian/kaito')
        ->assertStatus(200)
        ->assertSee('Bienvenido crhistian, alias kaito');

    }
    /** @test */
    public function itsWelcomeUserWithoutNickname()
    {
        $this->get('/saludo/crhistian')
        ->assertStatus(200)
        ->assertSee('Bienvenido crhistian');
    }
}

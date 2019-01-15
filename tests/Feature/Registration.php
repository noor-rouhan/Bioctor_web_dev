<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Registration extends TestCase
{
    public function test_user_reveives_mas(){

        $this-> post ('/register',[
            'name' => 'auri',
            'email' => 'kati@frantz.com',
            'password' => 'secret'
        ])->assertStatus(302);
        $this->assertDatabaseHas('user',[
            'username' => str_slug('auri')
        ]);

    }
}

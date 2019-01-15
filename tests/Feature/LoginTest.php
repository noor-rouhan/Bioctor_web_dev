<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_user_reveives_mas(){
        $user  = factory(Bioctor\User::class)-> create();
        $this->postJson('/login',[
            'email'=> $user->email,
            'password'=>'wrong-password'
        ])->assertStatus(422)
        ->assertJson([
            'message' => 'These credentials do not match our records.'
        ]);
    }
}

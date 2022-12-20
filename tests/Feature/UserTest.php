<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
   use RefreshDatabase;
    public function test_create_user()
    {
        // $data = ['name' => 'Catalina'];
        $user = User::factory()->create();
        $response = $this->post('/users/create',$user);

        $response
            ->assertStatus(201)
            ->assertJson(['created' => true])
            ->assertDatabaseHas('users', $user);
    }
}
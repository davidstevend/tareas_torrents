<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class UserTest extends TestCase
{
   use RefreshDatabase;

   use DatabaseMigrations;

   /** @test */
   public function it_visit_page_of_login()
   {
       $this->get('/login')
           ->assertStatus(200)
           ->assertSee('Login');
   }

   /** @test */
   public function authenticated_to_a_user()
   {
    Role::create(['id' => '1','role' => 'Admin', 'description' => 'Usuario Administrador, todos los privilegios']);
    Role::create(['id' => '2','role' => 'Usiario', 'description' => 'Usuario Normal']);

       $user = User::create([
        'role_id' => 1, // (1 - admin) (2 - usuario)
        'name' => 'David',
        'last_name' => 'Duran',
        'phone' => '3172143113',
        'email' => 'davidstevend@hotmail.com',
        'password' => bcrypt('12345678'),
        'status' => '1'
       ]);

       $this->get('/login')->assertSee('Login');
       $credentials = [
           "email" => "davidstevend@hotmail.com",
           "password" => "12345678"
       ];

       $response = $this->post('/login', $credentials);
       $response->assertRedirect('/home');
       $this->assertCredentials($credentials);
   }

   /** @test */
   public function not_authenticate_to_a_user_with_credentials_invalid()
   {
     
       $credentials = [
           "email" => "users@mail.com",
           "password" => "secret"
       ];

       $this->assertInvalidCredentials($credentials);
   }

   /** @test */
   public function the_email_is_required_for_authenticate()
   {
     
       $credentials = [
           "email" => null,
           "password" => "secret"
       ];

       $response = $this->from('/login')->post('/login', $credentials);
       $response->assertSessionHasErrors(['email']);
   }

   /** @test */
   public function the_password_is_required_for_authenticate()
   {
       
       $credentials = [
           "email" => "davidstevend@hotmail.com",
           "password" => null
       ];

       $response = $this->from('/login')->post('/login', $credentials);
       $response->assertRedirect('/login')
           ->assertSessionHasErrors();
   }
    public function test_create_user()
    {
        Role::create(['id' => '1','role' => 'Admin', 'description' => 'Usuario Administrador, todos los privilegios']);
        Role::create(['id' => '2','role' => 'Usiario', 'description' => 'Usuario Normal']);
    
           $user = User::create([
            'role_id' => 1, // (1 - admin) (2 - usuario)
            'name' => 'David 2',
            'last_name' => 'Duran 2',
            'phone' => '3172143113',
            'email' => 'sdavidstevend@hotmail.com',
            'password' => bcrypt('12345678'),
            'status' => '1'
           ]);

           return $user;
        // $data = ['name' => 'Catalina'];
        // $user = User::factory()->create();
        // $response = $this->post('/users/create',$user);

        // $response ->assertStatus(201);
    }
}
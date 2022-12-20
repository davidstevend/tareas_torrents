<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Role;
use App\Models\Task;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class TaskTest extends TestCase
{
    use RefreshDatabase;

   use DatabaseMigrations;

   
   /** @test */
    public function create_a_Task()
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


    
        $response = Task::create([
            'task' =>'tarea pruebas unitarias',
            'description' => 'descripcion de prueba en TDD',
            'date' => '2022-12-20',
            'expiration_date' => '2022-12-20',
            'expiration_date' => '2022-12-20',
            'user_id' => $user->id,
            'finished' => 'NO'
        ]);
        $response->assertSessionHas('status', 'Post has been created sucessfully');
        $response->assertRedirect();
        $response->assertOk(); 

        
    }
       

    //     // Con unique == false no revisa en la base posts y entonces no se raya con que sea un duplicado
    //     $slug_url = SlugService::createSlug(Post::class, 'slug', $title, ['unique' => false]);

    //     $response = $this->get('/posts/' . $slug_url);
    //     $response->assertStatus(404);

    //     $response = $this->actingAs($user)->post('/admin/posts', []);
    //     $response->assertSessionHasErrors([
    //         'title' => 'A title is required',
    //         'body' => 'You must sent a body',
    //         'is_draft' => 'You must sent if is draft or not'
    //     ]);
    // }
}

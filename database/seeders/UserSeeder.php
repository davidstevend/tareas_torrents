<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'role_id' => 1, // (1 - admin) (2 - usuario)
            'name' => 'David',
            'last_name' => 'Duran',
            'phone' => '3172143113',
            'email' => 'davidstevend@hotmail.com',
            'password' => bcrypt('12345678'),
            'status' => '1'
        ]);


       
        
        // User::factory(100)->create();
        
    }
}

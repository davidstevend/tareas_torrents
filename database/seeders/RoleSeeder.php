<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;



class RoleSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {

    Role::create(['id' => '1','role' => 'Admin', 'description' => 'Usuario Administrador, todos los privilegios']);
    Role::create(['id' => '2','role' => 'Usiario', 'description' => 'Usuario Normal']);
  }
}

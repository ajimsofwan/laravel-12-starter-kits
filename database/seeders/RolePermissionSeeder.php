<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    // Permission::create(['name' => 'create-user']);
    // Permission::create(['name' => 'read-user']);
    // Permission::create(['name' => 'update-user']);
    // Permission::create(['name' => 'delete-user']);

    // Permission::create(['name' => 'create-account']);
    // Permission::create(['name' => 'read-account']);
    // Permission::create(['name' => 'update-account']);
    // Permission::create(['name' => 'delete-account']);

    Role::create(['name' => 'admin']);
    Role::create(['name' => 'moderator']);
    Role::create(['name' => 'user']);

    // $roleAdmin = Role::findByName('admin');
    // $roleAdmin->givePermissionTo('create-user');
    // $roleAdmin->givePermissionTo('read-user');
    // $roleAdmin->givePermissionTo('update-user');
    // $roleAdmin->givePermissionTo('delete-user');
    // $roleAdmin->givePermissionTo('create-account'); 
    // $roleAdmin->givePermissionTo('read-account');
    // $roleAdmin->givePermissionTo('update-account');
    // $roleAdmin->givePermissionTo('delete-account');
  }
}

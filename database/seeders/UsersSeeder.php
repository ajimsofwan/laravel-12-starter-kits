<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('users')->insert([
      [
        'id' => '018e0245-26e2-7d3e-9f55-7e984209b642',
        'name' => 'Admin',
        'email' => 'admin@mail.com',
        'phone' => '+6281234567890',
        'email_verified_at' => now(),
        'password' => bcrypt('password'),
        'created_at' => now(),
        'updated_at' => now(),
      ],
      [
        'id' => '018e0246-265d-7b1a-9ef3-31b5ff6beef7',
        'name' => 'Moderator',
        'email' => 'moderator@mail.com',
        'phone' => '+6281234567891',
        'email_verified_at' => now(),
        'password' => bcrypt('password'),
        'created_at' => now(),
        'updated_at' => now(),
      ],
      [
        'id' => '018e0247-265d-7b1a-9ef3-31b5ff6beef7',
        'name' => 'User',
        'email' => 'user@mail.com',
        'phone' => '+6281234567892',
        'email_verified_at' => now(),
        'password' => bcrypt('password'),
        'created_at' => now(),
        'updated_at' => now(),
      ]
    ]);

    $admin = User::find('018e0245-26e2-7d3e-9f55-7e984209b642');
    $admin->assignRole('admin');

    $moderator = User::find('018e0246-265d-7b1a-9ef3-31b5ff6beef7');
    $moderator->assignRole('moderator');

    $user = User::find('018e0247-265d-7b1a-9ef3-31b5ff6beef7');
    $user->assignRole('user');
  }
}

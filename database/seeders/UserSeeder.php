<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use App\Models\User;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
        'name' => 'Admin',
        'email' => 'admin@test.com',
        'password' => Hash::make('password'),
        'role' => 'admin'
    ]);

    User::create([
        'name' => 'User',
        'email' => 'user@test.com',
        'password' => Hash::make('password'),
        'role' => 'user'
    ]);
    }
}

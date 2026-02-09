<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@gmail.com'], // kunci unik
            [
                'name' => 'Admin Perpus',
                'password' => Hash::make('password'),
                'role' => 'admin',
            ]
        );
    }
}

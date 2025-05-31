<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin
        User::create([
            'name' => 'trikusuma',
            'username' => 'suma',
            'email' => 'suma@example.com',
            'password' => Hash::make('suma123'),
            'role' => 'admin',
        ]);

        // Guru
        User::create([
            'name' => 'elijahpras',
            'username' => 'elmanuk',
            'email' => 'el@example.com',
            'password' => Hash::make('el123'),
            'role' => 'guru',
        ]);
    }
}

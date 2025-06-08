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

        $gurus = [
            [
                'name' => 'elijahpras',
                'username' => 'elmanuk',
                'email' => 'el@example.com',
                'password' => Hash::make('el123'),
                'role' => 'guru',
            ],
            [
                'name' => 'I Komang Deny Supanji, S.Pd.',
                'username' => 'denysupanji',
                'email' => 'deny@test.com',
                'password' => Hash::make('denysupanji'),
                'role' => 'guru',
            ],
            [
                'name' => ' I Wayan Sudiatmika, S.Pd.',
                'username' => 'pak_sudiatmika',
                'email' => 'sudiatmika@test.com',
                'password' => Hash::make('sudiatmika'),
                'role' => 'guru',
            ],
            [
                'name' => 'Ni Putu Suzy Puspita Dewi, S.Pd. M.Kom.',
                'username' => 'suzy',
                'email' => 'suzy@test.com',
                'password' => Hash::make('suzy'),
                'role' => 'guru',
            ],
            [
                'name' => 'I Gede Agus Saka Prasetya, S.Pd.',
                'username' => 'saka',
                'email' => 'saka@test.com',
                'password' => Hash::make('saka'),
                'role' => 'guru',
            ],
            [
                'name' => 'I Gusti Ayu Galuh Melia Putri, S.Ds.',
                'username' => 'galuh',
                'email' => 'galuh@example.com',
                'password' => Hash::make('galuh'),
                'role' => 'guru',
            ],
            [
                'name' => 'I Putu Karmayasa, S.T.',
                'username' => 'karmayasa',
                'email' => 'karmayasa@example.com',
                'password' => Hash::make('karmayasa'),
                'role' => 'guru',
            ],
            [
                'name' => 'I Putu Aditya Narayana, S.Pd.',
                'username' => 'aditya',
                'email' => 'aditya@example.com',
                'password' => Hash::make('aditya'),
                'role' => 'guru',
            ]
        ];
        // Guru
        // User::create([
        //     'name' => 'elijahpras',
        //     'username' => 'elmanuk',
        //     'email' => 'el@example.com',
        //     'password' => Hash::make('el123'),
        //     'role' => 'guru',
        // ]);
        foreach ($gurus as $guru) {
            User::create($guru);
        }
    }
}

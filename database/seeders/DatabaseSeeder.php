<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       
        Admin::create([
            'name'     => 'Admin Healtack',
            'email'    => 'admin@healtack.com',
            'password' => Hash::make('password'),
            'role'     => 'admin',
        ]);

        Dokter::create([
            'name'     => 'Dokter Healtack',
            'email'    => 'dokter@healtack.com',
            'password' => Hash::make('password'),
            'role'     => 'dokter',
        ]);

        User::create([
            'name'     => 'User Healtack',
            'email'    => 'user@healtack.com',
            'password' => Hash::make('password'),
            'role'     => 'user',
        ]);
    }
}

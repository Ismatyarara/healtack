<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Dokter;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       
        User::create([
            'name'     => 'Admin Healtack',
            'email'    => 'admin@healtack.com',
            'password' => Hash::make('password'),
            'role'     => 'admin',
        ]);

       $user = User::create([
        'name' => 'Dokter Healtack',
        'email' => 'dokter@healtack.com',
        'password' => bcrypt('password'),
        'role' => 'dokter',
    ]);

    Dokter::create([
        'pengguna_id' => $user->id,
        'spesialisasi' => 'Psikolog',
        'jadwal_praktek_hari' => 'senin - jumat',
        'jadwal_praktek_waktu' => '08:00 - 16:00',
        'tempat_praktek' => 'Rumah Sakit Muhammadiyah',
    ]);
  
        User::create([
            'name'     => 'User Healtack',
            'email'    => 'user@healtack.com',
            'password' => Hash::make('password'),
            'role'     => 'user',
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Membuat pengguna dengan role mahasiswa
        User::create([
            'id_user' => '1001',
            'nama' => 'Mahasiswa A',
            'email' => 'mahasiswa@example.com',
            'prodi' => 'Informatika',
            'angkatan' => '2021',
            'password' => Hash::make('password123'),  // Pastikan menggunakan hashing untuk password
            'role' => 'mahasiswa',
        ]);

        // Membuat pengguna dengan role dosen
        User::create([
            'id_user' => '1002',
            'nama' => 'Dosen B',
            'email' => 'dosen@example.com',
            'prodi' => 'Informatika',
            'angkatan' => '2015',
            'password' => Hash::make('password123'),  // Pastikan menggunakan hashing untuk password
            'role' => 'dosen',
        ]);

        // Membuat pengguna dengan role admin
        User::create([
            'id_user' => '1003',
            'nama' => 'Admin C',
            'email' => 'admin@example.com',
            'prodi' => 'Informatika',
            'angkatan' => '2010',
            'password' => Hash::make('password123'),  // Pastikan menggunakan hashing untuk password
            'role' => 'admin',
        ]);
    }
}

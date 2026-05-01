<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash; // ← tambahkan ini

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'nama' => 'Test User',
            'email' => 'test@example.com',
            'jabatan' => 'admin',
            'password' => Hash::make('123456789'),
            'is_tugas' => false,
        ]);
    }
}
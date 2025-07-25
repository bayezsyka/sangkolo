<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin Sangkolo',
            'email' => 'admin@sangkolo.com',
            'password' => Hash::make('password123'), // Ganti dengan password yang aman
            'role' => 'admin',
            'is_approved' => true, // Admin langsung disetujui
        ]);
    }
}
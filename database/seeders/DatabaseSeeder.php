<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Buat Admin User untuk Arctic Vision
        User::create([
            'name' => 'Admin Arctic',
            'email' => 'admin@arctic-vision.com',
            'password' => bcrypt('password123'),
            'email_verified_at' => now(),
        ]);
    }
}

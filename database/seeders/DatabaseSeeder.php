<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Membuat Akun Akses Nexus Console
        User::factory()->create([
            'name' => 'Nexus Admin',
            'email' => 'admin@nexus.com',
            'password' => bcrypt('password'),
        ]);

        // Memanggil Seeder Artikel Game
        $this->call(GamePostSeeder::class);
    }
}
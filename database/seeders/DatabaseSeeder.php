<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; 

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //         'name' => 'Muhammad Supriansyah',
        //         'email' => 'supikbm017@gmail.com',
        //         'password' => Hash::make('supi171003'),
        // ]);

        User::create([
            'name' => 'ULUN ADMIN',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
    ]);

    }
}

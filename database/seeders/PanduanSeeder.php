<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Panduan;

class PanduanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Panduan::create([
            'title' => 'cara meminum obat',
            'description' => ',Minum obat 3 kali sehari',
        ]);

        Panduan::create([
            'title' => 'Cara meminum obat batuk',
            'description' => "Minum sesudah makan",
        ]);


    }
}

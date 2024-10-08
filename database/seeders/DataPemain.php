<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pemain;
class DataPemain extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            Pemain::create([
                'id' => fake()->numberBetween(1, 30),
                'nama_pemain' => fake()->name(),
                'no_punggung' => fake()->numberBetween(1, 30),
                'posisi' => fake()->name(),
            ]);
        }
    }
}

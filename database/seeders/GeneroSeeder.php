<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genero;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genero::create(['nombre' => 'Action RPG']);
        Genero::create(['nombre' => 'Action-Adventure']);
        Genero::create(['nombre' => 'CRPG']);
        Genero::create(['nombre' => 'Survival Horror']);
        Genero::create(['nombre' => 'Mundo Abierto']);
        Genero::create(['nombre' => 'Aventura gráfica Point-and-click']);
    }
}

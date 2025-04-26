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
        Genero::create(['nombre' => 'Acción']);
        Genero::create(['nombre' => 'RPG']);
        Genero::create(['nombre' => 'Shooter']);
        Genero::create(['nombre' => 'Aventura']);
        Genero::create(['nombre' => 'Rol']);
        Genero::create(['nombre' => 'Survival Horror']);
        Genero::create(['nombre' => 'Mundo Abierto']);
        Genero::create(['nombre' => 'Aventura gráfica']);
        Genero::create(['nombre' => 'Plataformas']);
        Genero::create(['nombre' => 'Simulación']);
        Genero::create(['nombre' => 'Deportes']);
        Genero::create(['nombre' => 'Carreras']);
    }
}

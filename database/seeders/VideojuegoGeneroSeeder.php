<?php

namespace Database\Seeders;

use App\Models\Videojuego;
use App\Models\Genero;
use Illuminate\Database\Seeder;

class VideojuegoGeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Asocia algunos géneros con los videojuegos

        $diablo = Videojuego::where('nombre', 'Diablo IV')->first();
        $assassin = Videojuego::where('nombre', 'Assassins Creed - Black Flag')->first();
        $baldur = Videojuego::where('nombre', 'Baldurs Gate 3')->first();
        $dragon_age = Videojuego::where('nombre', 'Dragon Age - Inquisition')->first();
        $dying_light = Videojuego::where('nombre', 'Dying Light')->first();
        $gta = Videojuego::where('nombre', 'GTA VI')->first();
        $silent_hill = Videojuego::where('nombre', 'Silent Hill 2')->first();
        $longest_journey = Videojuego::where('nombre', 'The Longest Journey')->first();
        $witcher = Videojuego::where('nombre', 'The Witcher 3')->first();
        $zelda = Videojuego::where('nombre', 'The Legend of Zelda: Breath of the Wild')->first();

        // Buscamos loe géneros por nombre
        $rpg = Genero::where('nombre', 'Action RPG')->first();
        $aventura = Genero::where('nombre', 'Action-Adventure')->first();
        $crpg = Genero::where('nombre', 'CRPG')->first();
        $survival_horror = Genero::where('nombre', 'Survival Horror')->first();
        $mundo_abierto = Genero::where('nombre', 'Mundo Abierto')->first();

        // Asociamos los géneros con los videojuegos
        $diablo->generos()->attach([$rpg->id, $aventura->id]);
        $assassin->generos()->attach([$aventura->id, $mundo_abierto->id]);
        $baldur->generos()->attach([$rpg->id, $crpg->id]);
        $dragon_age->generos()->attach([$rpg->id, $aventura->id]);
        $dying_light->generos()->attach([$survival_horror->id, $aventura->id]);
        $gta->generos()->attach([$aventura->id, $mundo_abierto->id]);
        $silent_hill->generos()->attach([$survival_horror->id, $aventura->id]);
        $longest_journey->generos()->attach([$aventura->id, $rpg->id]);
        $witcher->generos()->attach([$rpg->id, $aventura->id, $mundo_abierto->id]);
        $zelda->generos()->attach([$aventura->id, $mundo_abierto->id]);
    }
}

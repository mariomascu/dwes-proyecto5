<?php

namespace Database\Seeders;

use App\Models\Videojuego;
use App\Models\Genero;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JuegoSeeder extends Seeder
{
    public function run(): void
    {
        $juego1 = Videojuego::create([
            'nombre' => 'Diablo IV',
            'desarrollador' => 'Blizzard Entertainment',
            'lanzamiento' => 2023,
            'url_cover' => 'https://www.pcworld.com/wp-content/uploads/2023/07/DIablo4MakingOf_01_Aufmacher.jpg?quality=50&strip=all&w=1024'
        ]);
        $juego1->generos()->attach([
            Genero::where('nombre', 'RPG')->first()->id,
            Genero::where('nombre', 'Mundo Abierto')->first()->id,
            Genero::where('nombre', 'Acción')->first()->id
        ]);

        $juego2 = Videojuego::create([
            'nombre' => 'Assassins Creed - Black Flag',
            'desarrollador' => 'Ubisoft',
            'lanzamiento' => 2013,
            'url_cover' => 'https://store-images.s-microsoft.com/image/apps.44102.69748098540497451.a03a4b64-603b-49b8-8644-4924ac7f3076.7c62c3e9-26da-46e8-a9f3-8cb7feb7d584?q=90&w=480&h=270'
        ]);
        $juego2->generos()->attach([
            Genero::where('nombre', 'Acción')->first()->id,
            Genero::where('nombre', 'Aventura')->first()->id,
            Genero::where('nombre', 'Mundo Abierto')->first()->id
        ]);

        $juego3 = Videojuego::create([
            'nombre' => 'Baldurs Gate 3',
            'desarrollador' => 'Larian Studios',
            'lanzamiento' => 2023,
            'url_cover' => 'https://store-images.s-microsoft.com/image/apps.4974.13550459053619040.81610713-4c64-470c-b543-bcffffaa6ea3.efb7c846-2f32-4a2d-b2d4-cd8109721332?q=90&w=480&h=270'
        ]);
        $juego3->generos()->attach([
            Genero::where('nombre', 'RPG')->first()->id,
            Genero::where('nombre', 'Rol')->first()->id,
            Genero::where('nombre', 'Aventura')->first()->id
        ]);

        $juego4 = Videojuego::create([
            'nombre' => 'Dragon Age - Inquisition',
            'desarrollador' => 'BioWare',
            'lanzamiento' => 2014,
            'url_cover' => 'https://store-images.s-microsoft.com/image/apps.52948.69435343314503572.4e403c3c-ba71-4c3e-a54b-a6819ca0e6bb.7d7316f0-95cf-4c9a-a0ca-ce7524adad9b?q=90&w=480&h=270'
        ]);
        $juego4->generos()->attach([
            Genero::where('nombre', 'RPG')->first()->id,
            Genero::where('nombre', 'Mundo Abierto')->first()->id,
            Genero::where('nombre', 'Acción')->first()->id
        ]);

        $juego5 = Videojuego::create([
            'nombre' => 'Dying Light',
            'desarrollador' => 'Techland',
            'lanzamiento' => 2015,
            'url_cover' => 'https://store-images.s-microsoft.com/image/apps.3619.63224705253913975.ec4ce281-2139-4076-9dc9-733fe2b0602b.befcd155-27b1-42d3-8e3b-80f67c84c720?q=90&w=480&h=270'
        ]);
        $juego5->generos()->attach([
            Genero::where('nombre', 'Survival Horror')->first()->id,
            Genero::where('nombre', 'Acción')->first()->id,
            Genero::where('nombre', 'Aventura')->first()->id
        ]);

        $juego6 = Videojuego::create([
            'nombre' => 'GTA VI',
            'desarrollador' => 'Rockstar Games',
            'lanzamiento' => 2025,
            'url_cover' => 'https://i.blogs.es/2f9706/gta/500_333.jpeg'
        ]);
        $juego6->generos()->attach([
            Genero::where('nombre', 'Acción')->first()->id,
            Genero::where('nombre', 'Aventura')->first()->id,
            Genero::where('nombre', 'Mundo Abierto')->first()->id
        ]);

        $juego7 = Videojuego::create([
            'nombre' => 'Silent Hill 2',
            'desarrollador' => 'Konami',
            'lanzamiento' => 2001,
            'url_cover' => 'https://assetsio.gnwcdn.com/Silent-Hill-2-walkthrough%2C-tips-and-tricks-cover.jpg?width=1200&height=1200&fit=bounds&quality=70&format=jpg&auto=webp'
        ]);
        $juego7->generos()->attach([
            Genero::where('nombre', 'Survival Horror')->first()->id,
            Genero::where('nombre', 'Aventura gráfica')->first()->id
        ]);

        $juego8 = Videojuego::create([
            'nombre' => 'The Longest Journey',
            'desarrollador' => 'Funcom',
            'lanzamiento' => 1999,
            'url_cover' => 'https://gaming-cdn.com/images/products/10092/616x353/the-longest-journey-pc-juego-steam-cover.jpg?v=1734971004'
        ]);
        $juego8->generos()->attach([
            Genero::where('nombre', 'Aventura gráfica')->first()->id,
            Genero::where('nombre', 'Aventura')->first()->id
        ]);

        $juego9 = Videojuego::create([
            'nombre' => 'The Witcher 3',
            'desarrollador' => 'CD Projekt Red',
            'lanzamiento' => 2015,
            'url_cover' => 'https://d.techtimes.com/en/full/391770/witcher-3-next-gen-cover.jpg'
        ]);
        $juego9->generos()->attach([
            Genero::where('nombre', 'RPG')->first()->id,
            Genero::where('nombre', 'Mundo Abierto')->first()->id,
            Genero::where('nombre', 'Aventura')->first()->id
        ]);

        $juego10 = Videojuego::create([
            'nombre' => 'The Legend of Zelda: Breath of the Wild',
            'desarrollador' => 'Nintendo',
            'lanzamiento' => 2017,
            'url_cover' => 'https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/media/image/2023/11/legend-zelda-3217690.jpg?tf=3840x'
        ]);
        $juego10->generos()->attach([
            Genero::where('nombre', 'Aventura')->first()->id,
            Genero::where('nombre', 'Mundo Abierto')->first()->id,
            Genero::where('nombre', 'Acción')->first()->id
        ]);
    }
}
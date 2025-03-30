<?php

namespace Database\Seeders;

use App\Models\Videojuego;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JuegoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $juego1 = new Videojuego();
        $juego1->nombre = 'Diablo IV';
        $juego1->desarrollador = 'Blizzard Entertainment';
        $juego1->lanzamiento = '2023-06-06';
        $juego1->url_cover = asset('img/' . str_replace(' ', '-', 'Diablo IV') . '.webp');
        $juego1->save();


        $juego2 = new Videojuego();
        $juego2->nombre = 'Assassins Creed - Black Flag';
        $juego2->desarrollador = 'Ubisoft';
        $juego2->lanzamiento = '2013-10-29';
        $juego2->url_cover = asset('img/Assassins-Creed---Black-Flag.webp');
        $juego2->save();


        $juego3 = new Videojuego();
        $juego3->nombre = 'Baldurs Gate 3';
        $juego3->desarrollador = 'Larian Studios';
        $juego3->lanzamiento = '2023-08-03';
        $juego3->url_cover = asset('img/Baldurs-Gate-3.webp');
        $juego3->save();


        $juego4 = new Videojuego();
        $juego4->nombre = 'Dragon Age - Inquisition';
        $juego4->desarrollador = 'BioWare';
        $juego4->lanzamiento = '2014-11-18';
        $juego4->url_cover = asset('img/Dragon-Age---Inquisition.webp');
        $juego4->save();


        $juego5 = new Videojuego();
        $juego5->nombre = 'Dying Light';
        $juego5->desarrollador = 'Techland';
        $juego5->lanzamiento = '2015-01-27';
        $juego5->url_cover = asset('img/Dying-Light.webp');
        $juego5->save();


        $juego6 = new Videojuego();
        $juego6->nombre = 'GTA VI';
        $juego6->desarrollador = 'Rockstar Games';
        $juego6->lanzamiento = '2025-03-30';
        $juego6->url_cover = asset('img/GTA-VI.webp');
        $juego6->save();


        $juego7 = new Videojuego();
        $juego7->nombre = 'Silent Hill 2';
        $juego7->desarrollador = 'Konami';
        $juego7->lanzamiento = '2001-09-24';
        $juego7->url_cover = asset('img/Silent-Hill-2.webp');
        $juego7->save();


        $juego8 = new Videojuego();
        $juego8->nombre = 'The Longest Journey';
        $juego8->desarrollador = 'Funcom';
        $juego8->lanzamiento = '1999-11-19';
        $juego8->url_cover = asset('img/The-Longest-Journey.webp');
        $juego8->save();


        $juego9 = new Videojuego();
        $juego9->nombre = 'The Witcher 3';
        $juego9->desarrollador = 'CD Projekt Red';
        $juego9->lanzamiento = '2015-05-19';
        $juego9->url_cover = asset('img/The-Witcher-3.webp');
        $juego9->save();


        $juego10 = new Videojuego();
        $juego10->nombre = 'The Legend of Zelda: Breath of the Wild';
        $juego10->desarrollador = 'Nintendo';
        $juego10->lanzamiento = '2017-03-03';
        $juego10->url_cover = 'https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/media/image/2023/11/legend-zelda-3217690.jpg?tf=3840x';
        $juego10->save();
    }
}

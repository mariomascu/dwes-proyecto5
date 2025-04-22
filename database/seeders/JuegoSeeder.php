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
        $juego1->url_cover = 'https://www.pcworld.com/wp-content/uploads/2023/07/DIablo4MakingOf_01_Aufmacher.jpg?quality=50&strip=all&w=1024';
        $juego1->save();


        $juego2 = new Videojuego();
        $juego2->nombre = 'Assassins Creed - Black Flag';
        $juego2->desarrollador = 'Ubisoft';
        $juego2->lanzamiento = '2013-10-29';
        $juego2->url_cover = 'https://store-images.s-microsoft.com/image/apps.44102.69748098540497451.a03a4b64-603b-49b8-8644-4924ac7f3076.7c62c3e9-26da-46e8-a9f3-8cb7feb7d584?q=90&w=480&h=270';
        $juego2->save();

        $juego3 = new Videojuego();
        $juego3->nombre = 'Baldurs Gate 3';
        $juego3->desarrollador = 'Larian Studios';
        $juego3->lanzamiento = '2023-08-03';
        $juego3->url_cover = 'https://store-images.s-microsoft.com/image/apps.4974.13550459053619040.81610713-4c64-470c-b543-bcffffaa6ea3.efb7c846-2f32-4a2d-b2d4-cd8109721332?q=90&w=480&h=270';
        $juego3->save();


        $juego4 = new Videojuego();
        $juego4->nombre = 'Dragon Age - Inquisition';
        $juego4->desarrollador = 'BioWare';
        $juego4->lanzamiento = '2014-11-18';
        $juego4->url_cover = 'https://store-images.s-microsoft.com/image/apps.52948.69435343314503572.4e403c3c-ba71-4c3e-a54b-a6819ca0e6bb.7d7316f0-95cf-4c9a-a0ca-ce7524adad9b?q=90&w=480&h=270';
        $juego4->save();


        $juego5 = new Videojuego();
        $juego5->nombre = 'Dying Light';
        $juego5->desarrollador = 'Techland';
        $juego5->lanzamiento = '2015-01-27';
        $juego5->url_cover = 'https://store-images.s-microsoft.com/image/apps.3619.63224705253913975.ec4ce281-2139-4076-9dc9-733fe2b0602b.befcd155-27b1-42d3-8e3b-80f67c84c720?q=90&w=480&h=270';
        $juego5->save();


        $juego6 = new Videojuego();
        $juego6->nombre = 'GTA VI';
        $juego6->desarrollador = 'Rockstar Games';
        $juego6->lanzamiento = '2025-03-30';
        $juego6->url_cover = 'https://i.blogs.es/2f9706/gta/500_333.jpeg';
        $juego6->save();


        $juego7 = new Videojuego();
        $juego7->nombre = 'Silent Hill 2';
        $juego7->desarrollador = 'Konami';
        $juego7->lanzamiento = '2001-09-24';
        $juego7->url_cover = 'https://assetsio.gnwcdn.com/Silent-Hill-2-walkthrough%2C-tips-and-tricks-cover.jpg?width=1200&height=1200&fit=bounds&quality=70&format=jpg&auto=webp';
        $juego7->save();


        $juego8 = new Videojuego();
        $juego8->nombre = 'The Longest Journey';
        $juego8->desarrollador = 'Funcom';
        $juego8->lanzamiento = '1999-11-19';
        $juego8->url_cover = 'https://gaming-cdn.com/images/products/10092/616x353/the-longest-journey-pc-juego-steam-cover.jpg?v=1734971004';
        $juego8->save();


        $juego9 = new Videojuego();
        $juego9->nombre = 'The Witcher 3';
        $juego9->desarrollador = 'CD Projekt Red';
        $juego9->lanzamiento = '2015-05-19';
        $juego9->url_cover = 'https://d.techtimes.com/en/full/391770/witcher-3-next-gen-cover.jpg';
        $juego9->save();


        $juego10 = new Videojuego();
        $juego10->nombre = 'The Legend of Zelda: Breath of the Wild';
        $juego10->desarrollador = 'Nintendo';
        $juego10->lanzamiento = '2017-03-03';
        $juego10->url_cover = 'https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/media/image/2023/11/legend-zelda-3217690.jpg?tf=3840x';
        $juego10->save();
    }
}

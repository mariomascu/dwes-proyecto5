<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class RutaController extends Controller
{
    public function saludo()
    {
        return "¡Hola!";
    }

    // Función que muestra todos los juegos
    public function mostrarJuegos()
    {
        $juegos = [
            ['id' => 1, 'nombre' => 'The Witcher 3'],
            ['id' => 2, 'nombre' => 'Dying Light'],
            ['id' => 3, 'nombre' => 'Silent Hill 2'],
            ['id' => 4, 'nombre' => 'The Longest Journey'],
            ['id' => 5, 'nombre' => 'Assassins Creed: Black Flag'],
            ['id' => 6, 'nombre' => 'Dragon Age - Inquisition'],
            ['id' => 7, 'nombre' => 'Diablo IV'],
            ['id' => 8, 'nombre' => 'Baldurs Gate 3'],
            ['id' => 9, 'nombre' => 'GTA VI']
        ];

        return view('juegos', ['juegos' => $juegos]);
    }

    // Función para mostrar un juego específico por ID
    public function mostrarJuegoID($id)
    {
        $juegos = [
            ['id' => 1, 'nombre' => 'The Witcher 3'],
            ['id' => 2, 'nombre' => 'Dying Light'],
            ['id' => 3, 'nombre' => 'Silent Hill 2'],
            ['id' => 4, 'nombre' => 'The Longest Journey'],
            ['id' => 5, 'nombre' => 'Assassins Creed: Black Flag'],
            ['id' => 6, 'nombre' => 'Dragon Age - Inquisition'],
            ['id' => 7, 'nombre' => 'Diablo IV'],
            ['id' => 8, 'nombre' => 'Baldurs Gate 3'],
            ['id' => 9, 'nombre' => 'GTA VI']
        ];

        $juego = collect($juegos)->firstWhere('id', $id);

        if ($juego) {
            return response()->json($juego);
        } else {
            return response()->json(['error' => 'Juego no encontrado'], 404);
        }
    }
}

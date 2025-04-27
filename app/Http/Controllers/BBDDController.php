<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Videojuego;
use App\Models\Genero;

class BBDDController extends Controller
{
    public function ver()
    {
        $videojuegos = DB::table('videojuegos')->get(); //forma de consultar la base de datos. Obtengo todos los videojuegos de la tabla videojuegos y los almaceno en la variable videojuegos 
        return view('ver', ['videojuegos' => $videojuegos]); // devuelve la vista ver.blade.php a la que se le pasa un array con los videojuegos
    }


    public function anadir()
    {
        return view('anadir');
    }

    public function guardar(Request $request)
    {
        // Validación de entrada
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'desarrollador' => 'required|string|max:255',
            'lanzamiento' => 'required|integer|min:1980|max:2025'.date('Y'),
            'url_cover' => 'nullable|url',
            'generos' => 'required|array|min:1',
            'generos.*' => 'string'
        ]);

        // Crear el videojuego usando Eloquent
        $videojuego = Videojuego::create([
            'nombre' => $request->nombre,
            'desarrollador' => $request->desarrollador,
            'lanzamiento' => $request->lanzamiento,
            'url_cover' => $request->url_cover ?? 'https://img.freepik.com/vector-premium/juego-patrones-fisuras_118813-11742.jpg?semt=ais_hybrid&w=740'
        ]);

        // Procesar géneros
        foreach ($request->generos as $nombreGenero) {
            $genero = Genero::firstOrCreate(['nombre' => $nombreGenero]);
            $videojuego->generos()->attach($genero->id);
        }

        return redirect(route('ver'))->with('success', 'Videojuego añadido correctamente a la base de datos.');
    }
}


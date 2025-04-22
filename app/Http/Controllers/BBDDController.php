<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    // Validación de entrada, si es necesario
    $request->validate([
        'nombre' => 'required|string|max:255',
        'desarrollador' => 'required|string|max:255',
        'lanzamiento' => 'required|integer|digits:4|max:'.date('Y'),
        'url_cover' => 'nullable|url', // Si la URL debe ser válida
    ]);

    // Obtener la URL de la portada desde el request (formulario)
    $url_cover = $request->input('url_cover', ''); // En caso de no enviarse, asignar un valor vacío o por defecto

    // Inserción del registro en la base de datos
    DB::table('videojuegos')->insert([
        'nombre' => $request->nombre,
        'desarrollador' => $request->desarrollador,
        'lanzamiento' => $request->lanzamiento,
        'url_cover' => $url_cover,
        'created_at' => now(),
        'updated_at' => now()
    ]);

    // Redirigir con mensaje de éxito
    return redirect(route('ver'))->with('success', 'Videojuego añadido correctamente.');
}
}


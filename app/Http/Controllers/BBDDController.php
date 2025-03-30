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
        // Validar la solicitud
        $request->validate([
            'nombre' => 'required|string|max:255',
            'desarrollador' => 'required|string|max:255',
            'lanzamiento' => 'required|date',
            'url_cover' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Inicializar la variable $url_cover
        $url_cover = null;

        // Manejar la subida del archivo
        if ($request->hasFile('url_cover')) {
            $file = $request->file('url_cover');
            $filename = time() . '-' . $file->getClientOriginalName();
            $file->move(public_path('img'), $filename);
            $url_cover = 'img/' . $filename;
        }

        // Inserción del registro en la base de datos
        DB::table('videojuegos')->insert([
            'nombre' => $request->nombre,
            'desarrollador' => $request->desarrollador,
            'lanzamiento' => $request->lanzamiento,
            'url_cover' => $url_cover,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Una vez que se guarda, redirijo a la ruta para ver todos los videojuegos mostrando un mensaje de éxito
        return redirect(route('ver'))->with('success', 'Videojuego añadido correctamente.');
    }
}


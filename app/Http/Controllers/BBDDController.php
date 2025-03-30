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
        DB::table('videojuegos')->insert([
            'nombre' => $request->nombre,
            'desarrollador' => $request->desarrollador,
            'lanzamiento' => $request->lanzamiento,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // de esta forma se redirige a la ruta ver pero mostrando un mensaje de éxito
        return redirect(route('ver'))->with('success', 'Videojuego añadido correctamente.');
    }
}


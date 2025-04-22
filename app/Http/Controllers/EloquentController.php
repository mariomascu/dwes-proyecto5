<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use Illuminate\Http\Request;

class EloquentController extends Controller
{
    public function generos()
    {
        // Obtener todos los géneros con sus videojuegos relacionados
        $generos = Genero::with('videojuegos')->get();

        return view('generos', compact('generos'));
    }
}

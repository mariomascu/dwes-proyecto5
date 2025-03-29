<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BBDDController extends Controller
{
    public function ver()
    {
        $videojuegos = DB::table('videojuegos')->get();
        return view('ver', ['videojuegos' => $videojuegos]);
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

        return view('/ver');
    }
}


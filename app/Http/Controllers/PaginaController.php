<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{

    public function inicio()
    {
        return view('inicio');
    }

    public function sobreNosotros()
    {
        $tarea = [
            'nombre' => 'Mario',
            'apellido1' => 'Mascuñano',
            'apellido2' => 'Almagro',
        ];

        return view('sobre-nosotros', ['tarea' => $tarea]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Videojuego;
use App\Models\Genero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CRUDController extends Controller
{
    // Seleccionar juego para editar
    public function selectForEdit()
    {
        $videojuegos = Videojuego::all();
        return view('select-edit', compact('videojuegos'));
    }

    // Procesar selección para editar (POST)
    public function processSelectForEdit(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:videojuegos,id'
        ]);
        
        return redirect()->route('editar.form', ['id' => $request->id]);
    }

    // Mostrar formulario de edición (GET)
    public function edit($id)
    {
        $videojuego = Videojuego::findOrFail($id);
        return view('editar', compact('videojuego'));
    }

    // Actualizar el videojuego (PUT/PATCH)
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:100',
            'desarrollador' => 'required|string|max:50',
            'lanzamiento' => 'required|integer|digits:4|max:'.date('Y'),
            'url_cover' => 'nullable|url'
        ]);

        $videojuego = Videojuego::findOrFail($id);
        $videojuego->update($validated);

        return redirect()->route('ver')->with('success', 'Videojuego actualizado correctamente');
    }

    // Seleccionar juego para borrar
    public function selectForDelete()
    {
        if (!Auth::check()) {
            return redirect()->route('acceso-denegado')->with('message', 'Debe iniciar sesión');
        }

        if (Auth::user()->rol !== 'administrador') {
            return redirect()->route('acceso-denegado')->with('message', 'No tiene permisos de administrador');
        }

        $videojuegos = Videojuego::all();
        return view('select-delete', compact('videojuegos'));
    }

    // Borrar juego
    public function destroy($id)
    {
        if (!Auth::check() || Auth::user()->rol !== 'administrador') {
            $message = !Auth::check() ? 'Debe iniciar sesión' : 'No tiene permisos de administrador'; // muestro el mensaje con un ternario
            return redirect()->route('acceso-denegado')->with('message', $message);
        }

        $videojuego = Videojuego::findOrFail($id);
        $nombre = $videojuego->nombre;
        $videojuego->delete();

        return view('confirmacion-borrado', ['nombre' => $nombre]);
    }
}
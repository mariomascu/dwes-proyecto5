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

  
    public function processSelectForEdit(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:videojuegos,id'
        ]);
        
        return redirect()->route('editar.form', ['id' => $request->id]);
    }

       public function edit($id)
    {
        $videojuego = Videojuego::with('generos')->findOrFail($id);
        $generos = Genero::all();
        return view('editar', compact('videojuego', 'generos'));
    }

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

        // Aquí actualizo los géneros del videojuego
        if ($request->has('generos')) {
            $generosSeleccionados = Genero::whereIn('nombre', $request->generos)->pluck('id');
            $videojuego->generos()->sync($generosSeleccionados);
        } else {
            $videojuego->generos()->detach(); // Si no seleccionan ningún género, se eliminan todos
        }

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
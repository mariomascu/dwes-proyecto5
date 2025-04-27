@extends('layouts.plantilla')

@section('content')
    <div class="container">
        <h1 class="page-title mt-5 mb-5 text-center">GÉNEROS</h1>

        <!-- Tabla de Géneros con sus Videojuegos -->
        <h2 class="mb-3 text-center">Relación Géneros con Videojuegos</h2>
        <table class="table tabla-generos mb-5">
            <thead>
                <tr>
                    <th>GÉNERO</th>
                    <th>VIDEOJUEGOS</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($generos as $genero)
                    <tr>
                        <td>{{ $genero->nombre }}</td>
                        <td>
                            <ul>
                                @foreach ($genero->videojuegos as $videojuego)
                                    <li>{{ $videojuego->nombre }}</li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Tabla de Videojuegos con sus Géneros -->
        <h2 class="mb-3 text-center">Relación Videojuegos con Géneros</h2>
        <table class="table tabla-generos mb-5">
            <thead>
                <tr>
                    <th>VIDEOJUEGOS</th>
                    <th>GÉNERO</th>
                </tr>
            </thead>
            <tbody>
                @php
                    // Crear una colección de videojuegos únicos para evitar duplicados
                    $videojuegos = \App\Models\Videojuego::with('generos')->get();
                @endphp
                @foreach ($videojuegos as $videojuego)
                    <tr>
                        <td>{{ $videojuego->nombre }}</td>
                        <td>
                            <ul>
                                @foreach ($videojuego->generos as $genero)
                                    <li>{{ $genero->nombre }}</li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

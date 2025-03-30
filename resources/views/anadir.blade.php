@extends('layouts.plantilla')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center page-title">Añadir Videojuego</h1>

        <form action="{{ route('guardar') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="desarrollador">Desarrollador</label>
                <input type="text" class="form-control" id="desarrollador" name="desarrollador" required>
            </div>
            <div class="form-group">
                <label for="lanzamiento">Fecha de Lanzamiento</label>
                <input type="date" class="form-control" id="lanzamiento" name="lanzamiento" required>
            </div>
            <div class="form-group">
                <label for="url_cover">Cover</label>
                <input type="file" class="form-control" id="url_cover" name="url_cover" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
@endsection

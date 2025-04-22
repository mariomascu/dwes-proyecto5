@extends('layouts.plantilla')

@section('content')
<div class="container container-editar mt-5">
    <h1 class="text-center page-title">EDITAR: {{ $videojuego->nombre }}</h1>
    
    <form action="{{ route('editar.update', $videojuego->id) }}" method="POST" class="form-editar">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" 
                   value="{{ $videojuego->nombre }}" required maxlength="100">
        </div>
        
        <div class="form-group">
            <label for="desarrollador">Desarrollador</label>
            <input type="text" class="form-control" id="desarrollador" name="desarrollador" 
                   value="{{ $videojuego->desarrollador }}" required maxlength="50">
        </div>
        
        <div class="form-group">
            <label for="lanzamiento">Año de Lanzamiento</label>
            <input type="number" class="form-control" id="lanzamiento" name="lanzamiento" 
                   value="{{ $videojuego->lanzamiento }}" min="1950" max="{{ date('Y') }}" required>
        </div>
        
        <div class="form-group">
            <label for="url_cover">URL Portada</label>
            <input type="text" class="form-control" id="url_cover" name="url_cover" 
                   value="{{ $videojuego->url_cover }}" placeholder="Ejemplo: http://imagendeprueba.jpg">
            @if($videojuego->url_cover)
                <div class="mt-2">
                    <small>Vista previa:</small>
                    <img src="{{ $videojuego->url_cover }}" alt="Portada actual" class="img-thumbnail mt-1">
                </div>
            @endif
        </div>
        
        <div class="form-group btn-group-editar">
            <button type="submit" class="btn btn-editar me-3">Actualizar</button>
            <a href="{{ route('ver') }}" class="btn btn-cancelar">Cancelar</a>
        </div>
    </form>
</div>
@endsection
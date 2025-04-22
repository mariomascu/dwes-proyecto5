@extends('layouts.plantilla')

@section('content')
<div class="container container-select-edit mt-5 mb-6">
    <h1 class="text-center page-title">SELECCIONAR VIDEOJUEGO PARA EDITAR</h1>
    
    <form action="{{ route('editar.process') }}" method="POST" class="form-select-edit"  style="margin-bottom: 20vh;">
        @csrf
        <div class="form-group">
            <label for="videojuego_id">Selecciona un videojuego:</label>
            <select class="form-control" id="videojuego_id" name="id" required>
                @foreach($videojuegos as $videojuego)
                    <option value="{{ $videojuego->id }}">
                        {{ $videojuego->nombre }} ({{ $videojuego->lanzamiento }})
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-seleccionar me-3">Seleccionar</button>
            <a href="{{ route('ver') }}" class="btn btn-cancelar">Cancelar</a>
        </div>
    </form>
</div>
@endsection
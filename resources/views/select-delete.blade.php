@extends('layouts.plantilla')

@section('content')
<div class="container mt-5">
    <h1 class="text-center page-title">BORRAR VIDEOJUEGO</h1>
    
    <form action="{{ route('borrar.destroy') }}" method="POST">
        @csrf
        @method('DELETE')
        <div class="form-group">
            <label for="videojuego_id">Selecciona un videojuego para borrar:</label>
            <select class="form-control" id="videojuego_id" name="id" required>
                @foreach($videojuegos as $videojuego)
                    <option value="{{ $videojuego->id }}">{{ $videojuego->nombre }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-danger mt-3">Borrar</button>
    </form>
</div>
@endsection
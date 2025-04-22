@extends('layouts.plantilla')

@section('content')
<div class="container mt-5 text-center">
    <h1 class="page-title">¡Borrado completado!</h1>
    <p>El videojuego <strong>{{ $nombre }}</strong> ha sido eliminado correctamente.</p>
    <a href="{{ route('ver') }}" class="btn btn-primary">Volver a la lista</a>
</div>
@endsection
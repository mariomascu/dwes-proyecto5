@extends('layouts.plantilla')

@section('content')
<div class="container mt-5 text-center">
    <h1 class="page-title">¡Edición completada!</h1>
    <p>El videojuego <strong>{{ $videojuego->nombre }}</strong> ha sido actualizado correctamente.</p>
    <a href="{{ route('ver') }}" class="btn btn-primary">Volver a la lista</a>
</div>
@endsection
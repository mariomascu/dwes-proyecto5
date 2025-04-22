@extends('layouts.plantilla')

@section('content')
<div class="container mt-5 text-center">
    <h1 class="page-title text-danger">Acceso denegado</h1>
    <p class="alert alert-danger">{{ session('message') ?? 'No tiene permisos para acceder a esta página' }}</p>
    
    @guest
        <a href="{{ route('login') }}" class="btn btn-primary">Iniciar sesión</a>
    @endguest
    
    <a href="{{ route('inicio') }}" class="btn btn-secondary">Volver al inicio</a>
</div>
@endsection
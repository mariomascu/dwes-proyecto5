@extends('layouts.plantilla')
@section('content')

<div class="container mt-5 sobre-nosotros">
    <h1>Sobre Nosotros</h1>
    <p>Información sobre la tarea:</p>

    <h3>Tarea realizada por {{$tarea['nombre']}} {{$tarea['apellido1']}} {{$tarea['apellido2']}}</h3>

</div>

@endsection

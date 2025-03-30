@extends('layouts.plantilla')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center page-title">Lista de Videojuegos</h1>
        <p class="text-center lead">Explora nuestra colección de videojuegos.</p>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row mt-5">
            @foreach ($videojuegos as $juego)
                <div class="col-md-4 mb-4">
                    <div class="card game-card">
                        <div class="card-body text-center">
                            <h5 class="card-title game-title">{{ $juego->nombre }}</h5>
                            <p class="card-text">{{ $juego->desarrollador }}</p>
                            <p class="card-text">{{ $juego->lanzamiento }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

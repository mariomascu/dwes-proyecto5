@include('layouts.header') <!--carga de la cabecera ruteada-->


<div class="container mt-5">
    <h1 class="text-center page-title">Lista de Juegos</h1>
    <p class="text-center lead">Explora nuestra colección de juegos.</p>

    <!-- Lista de juegos -->
    <div class="row mt-5">
        @foreach ($juegos as $juego)
            <div class="col-md-4 mb-4">
                <div class="card game-card"
                     style="background-image: url('{{ asset('img/' . str_replace(' ', '-', $juego['nombre']) . '.webp') }}');">
                    <div class="card-body text-center">
                        <h5 class="card-title game-title">{{ $juego['nombre'] }}</h5>
                        <a href="#" class="btn cta-button">Explorar</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


@include('layouts.header') <!--carga de la cabecera ruteada-->

<!-- Contenido principal -->
<div class="container mt-5">
    <h1 class="text-center page-title">OverGamer</h1>
    <p class="text-center lead">Explora los mejores juegos y descubre nuevas aventuras.</p>

    <!-- Lista de juegos -->
    <div class="row mt-5">
        @php
            $juegos = [
                ['id' => 1, 'nombre' => 'The Witcher 3'],
                ['id' => 2, 'nombre' => 'Dying Light'],
                ['id' => 3, 'nombre' => 'Silent Hill 2'],
                ['id' => 4, 'nombre' => 'The Longest Journey'],
                ['id' => 5, 'nombre' => 'Assassins Creed - Black Flag'],
                ['id' => 6, 'nombre' => 'Dragon Age - Inquisition'],
                ['id' => 7, 'nombre' => 'Diablo IV'],
                ['id' => 8, 'nombre' => 'Baldurs Gate 3'],
                ['id' => 9, 'nombre' => 'GTA VI']
            ];
        @endphp

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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

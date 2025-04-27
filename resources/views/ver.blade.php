@extends('layouts.plantilla')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center page-title">CATÁLOGO</h1>
        <p class="text-center lead">Explora nuestra colección de videojuegos.</p>

        <div class="row mt-5">
        @foreach ($videojuegos as $juego)
            <div class="col-md-4 mb-4">
                 <div class="card game-card" style="background-image: url('{{ asset($juego->url_cover) }}');">
                    <div class="card-body text-center">
                        <h5 class="card-title game-title">{{ $juego->nombre }}</h5>
                        <p class="card-text">{{ $juego->desarrollador }}</p>
                        <p class="card-text">Lanzamiento: {{ $juego->lanzamiento }}</p>
                    </div>
                </div>
            </div>
        @endforeach
        </div>

        <!-- Menú contextual -->
        <div id="contextMenu" class="position-absolute bg-white border rounded shadow p-2" style="display: none; z-index: 999;">
            <form id="editForm" action="{{ route('editar.process') }}" method="POST">
                @csrf
                <input type="hidden" name="id" id="selectedGameId">
                <button type="submit" class="btn btn-link p-0 text-start">Editar</button>
            </form>
        </div>

        <script>
            const contextMenu = document.getElementById('contextMenu');
            const selectedGameIdInput = document.getElementById('selectedGameId');

            // Mostrar menú contextual
            function showContextMenu(event, gameId) {
                event.preventDefault();
                selectedGameIdInput.value = gameId;

                contextMenu.style.display = 'block'; //hago que aparezca el menú contextual
                contextMenu.style.left = `${event.pageX}px`; //sitúo el menú contextual al lado de donde se pincha.
                contextMenu.style.top = `${event.pageY}px`;
            }

            // Oculto el menú contextual si se hace clic fuera
            window.addEventListener('click', () => {
                contextMenu.style.display = 'none';
            });

            // También ocultar al hacer scroll
            window.addEventListener('scroll', () => {
                contextMenu.style.display = 'none';
            });
        </script>

    </div>
@endsection

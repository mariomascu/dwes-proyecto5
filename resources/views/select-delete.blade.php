@extends('layouts.plantilla')

@section('content')
<div class="container container-select-edit mt-5 mb-6">
    <h1 class="text-center page-title">SELECCIONAR VIDEOJUEGO PARA BORRAR</h1>

    <form id="deleteForm" action="{{ route('borrar.destroy', ['id' => $videojuegos[0]->id]) }}" method="POST" class="form-select-edit" style="margin-bottom: 20vh;">
        @csrf
        @method('DELETE')

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
            <button type="button" class="btn btn-borrar me-3" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal">
                Borrar
            </button>
            <a href="{{ route('ver') }}" class="btn btn-cancelar">Cancelar</a>
        </div>

        <!-- Modal de confirmación -->
        <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="background-color: #1c002e; border: 2px solid #ff1493; color: white;">
                    <div class="modal-header" style="border-bottom: 1px solid #ff1493;">
                        <h5 class="modal-title" id="confirmDeleteModalLabel">Confirmar Borrado</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar" style="background-color: #ff1493;"></button>
                    </div>
                    <div class="modal-body">
                        ¿Estás seguro de que deseas borrar el videojuego seleccionado? Esta acción no se puede deshacer.
                    </div>
                    <div class="modal-footer" style="border-top: 1px solid #ff1493;">
                        <button type="button" class="btn btn-cancelar" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-seleccionar">Confirmar Borrado</button>
                    </div>
                </div>
            </div>
        </div>

    </form>
</div>
@endsection
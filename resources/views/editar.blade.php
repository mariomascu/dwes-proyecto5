@extends('layouts.plantilla')

@section('content')
<div class="container container-editar mt-5">
    <h1 class="text-center page-title">EDITAR: {{ $videojuego->nombre }}</h1>
    
    <form action="{{ route('editar.update', $videojuego->id) }}" method="POST" class="form-editar">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" 
                   value="{{ $videojuego->nombre }}" required maxlength="100">
        </div>
        
        <div class="form-group">
            <label for="desarrollador">Desarrollador</label>
            <input type="text" class="form-control" id="desarrollador" name="desarrollador" 
                   value="{{ $videojuego->desarrollador }}" required maxlength="50">
        </div>
        
        <div class="form-group">
            <label for="lanzamiento">Año de Lanzamiento</label>
            <input type="number" class="form-control" id="lanzamiento" name="lanzamiento" 
                   value="{{ $videojuego->lanzamiento }}" min="1950" max="{{ date('Y') }}" required>
        </div>
        
        <div class="form-group">
            <label for="url_cover">URL Portada</label>
            <input type="text" class="form-control" id="url_cover" name="url_cover" 
                   value="{{ $videojuego->url_cover }}" placeholder="Ejemplo: http://imagendeprueba.jpg">
            @if($videojuego->url_cover)
                <div class="mt-2">
                    <small>Vista previa:</small>
                    <img src="{{ $videojuego->url_cover }}" alt="Portada actual" class="img-thumbnail mt-1">
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="genero">Género del Videojuego</label>
            <table style="border-spacing: 20px 10px; width: 100%;">
                <tbody>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="generos[]" value="Acción" id="accion" {{ $videojuego->generos->contains('nombre', 'Acción') ? 'checked' : '' }}>
                                <label class="form-check-label" for="accion">Acción</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="generos[]" value="RPG" id="rpg" {{ $videojuego->generos->contains('nombre', 'RPG') ? 'checked' : '' }}>
                                <label class="form-check-label" for="rpg">RPG</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="generos[]" value="Shooter" id="shooter" {{ $videojuego->generos->contains('nombre', 'Shooter') ? 'checked' : '' }}>
                                <label class="form-check-label" for="shooter">Shooter</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="generos[]" value="Aventura" id="aventura" {{ $videojuego->generos->contains('nombre', 'Aventura') ? 'checked' : '' }}>
                                <label class="form-check-label" for="aventura">Aventura</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="generos[]" value="Rol" id="rol" {{ $videojuego->generos->contains('nombre', 'Rol') ? 'checked' : '' }}>
                                <label class="form-check-label" for="rol">Rol</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="generos[]" value="Survival Horror" id="survival_horror" {{ $videojuego->generos->contains('nombre', 'Survival Horror') ? 'checked' : '' }}>
                                <label class="form-check-label" for="survival_horror">Survival Horror</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="generos[]" value="Mundo Abierto" id="mundo_abierto" {{ $videojuego->generos->contains('nombre', 'Mundo Abierto') ? 'checked' : '' }}>
                                <label class="form-check-label" for="mundo_abierto">Mundo Abierto</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="generos[]" value="Aventura Gráfica" id="aventura_grafica" {{ $videojuego->generos->contains('nombre', 'Aventura Gráfica') ? 'checked' : '' }}>
                                <label class="form-check-label" for="aventura_grafica">Aventura Gráfica</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="generos[]" value="Plataformas" id="plataformas" {{ $videojuego->generos->contains('nombre', 'Plataformas') ? 'checked' : '' }}>
                                <label class="form-check-label" for="plataformas">Plataformas</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="generos[]" value="Simulación" id="simulacion" {{ $videojuego->generos->contains('nombre', 'Simulación') ? 'checked' : '' }}>
                                <label class="form-check-label" for="simulacion">Simulación</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="generos[]" value="Deportes" id="deportes" {{ $videojuego->generos->contains('nombre', 'Deportes') ? 'checked' : '' }}>
                                <label class="form-check-label" for="deportes">Deportes</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="generos[]" value="Carreras" id="carreras" {{ $videojuego->generos->contains('nombre', 'Carreras') ? 'checked' : '' }}>
                                <label class="form-check-label" for="carreras">Carreras</label>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div class="form-group btn-group-editar">
            <button type="submit" class="btn btn-editar me-3">Actualizar</button>
            <a href="{{ route('ver') }}" class="btn btn-cancelar">Cancelar</a>
        </div>
    </form>
</div>
@endsection
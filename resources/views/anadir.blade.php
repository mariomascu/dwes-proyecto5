@extends('layouts.plantilla')

@section('content')
    <div class="container container-anadir mt-5">
        <h1 class="text-center page-title">AÑADIR VIDEOJUEGO</h1>

        <form action="{{ route('guardar') }}" method="POST" enctype="multipart/form-data" class="form-anadir">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="desarrollador">Desarrollador</label>
                <input type="text" class="form-control" id="desarrollador" name="desarrollador" required>
            </div>
            <div class="form-group">
                <label for="lanzamiento">Año de Lanzamiento</label>
                <input type="date" class="form-control" id="lanzamiento" name="lanzamiento" required>
            </div>
            <div class="form-group">
                <label for="url_cover">URL Portada del juego <i>(Introduce una url para cargarla desde internet)</i></label>
                <input type="text" class="form-control" id="url_cover" name="url_cover" placeholder="Ejemplo: http://imagendeprueba.jpg" default="https://img.freepik.com/vector-premium/juego-patrones-fisuras_118813-11742.jpg?semt=ais_hybrid&w=740">
            </div>
            
            <div class="form-group">
                <label for="genero">Género del Videojuego</label>
                <table style="border-spacing: 20px 10px; width: 100%;">
                    <tr>
                        <td class="ms-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="generos[]" value="Action RPG" id="action_rpg">
                                <label class="form-check-label" for="action_rpg">Action RPG</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="generos[]" value="Action-Adventure" id="action_adventure">
                                <label class="form-check-label" for="action_adventure">Action-Adventure</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="generos[]" value="CRPG" id="crpg">
                                <label class="form-check-label" for="crpg">CRPG</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="generos[]" value="Survival Horror" id="survival_horror">
                                <label class="form-check-label" for="survival_horror">Survival Horror</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="generos[]" value="Mundo Abierto" id="mundo_abierto">
                                <label class="form-check-label" for="mundo_abierto">Mundo Abierto</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="generos[]" value="Aventura Gráfica" id="aventura_grafica">
                                <label class="form-check-label" for="aventura_grafica">Aventura Gráfica</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="generos[]" value="Shooter" id="shooter">
                                <label class="form-check-label" for="shooter">Shooter</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="generos[]" value="Deportes" id="deportes">
                                <label class="form-check-label" for="deportes">Deportes</label>
                            </div>
                        </td>
                        <td></td> <!-- Columna vacía para alinear correctamente -->
                    </tr>
                </table>
            </div>


            <button type="submit" class="btn">Añadir Juego</button>
        </form>
    </div>
@endsection

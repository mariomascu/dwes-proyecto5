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
                <input type="number" class="form-control" id="lanzamiento" name="lanzamiento" 
                    min="1950" max="{{ date('Y') }}" required>
            </div>
            <div class="form-group">
                <label for="url_cover">URL Portada del juego <i>(Introduce una url para cargarla desde internet)</i></label>
                <input type="text" class="form-control" id="url_cover" name="url_cover" placeholder="Ejemplo: http://imagendeprueba.jpg" value="">
            </div>
            
            <div class="form-group">
                <label for="genero">Género del Videojuego</label>
                <table style="border-spacing: 20px 10px; width: 100%;">
                    <tbody>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="generos[]" value="Acción" id="accion">
                                    <label class="form-check-label" for="accion">Acción</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="generos[]" value="RPG" id="rpg">
                                    <label class="form-check-label" for="rpg">RPG</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="generos[]" value="Shooter" id="shooter">
                                    <label class="form-check-label" for="shooter">Shooter</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="generos[]" value="Aventura" id="aventura">
                                    <label class="form-check-label" for="aventura">Aventura</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="generos[]" value="Rol" id="rol">
                                    <label class="form-check-label" for="rol">Rol</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="generos[]" value="Survival Horror" id="survival_horror">
                                    <label class="form-check-label" for="survival_horror">Survival Horror</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
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
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="generos[]" value="Plataformas" id="plataformas">
                                    <label class="form-check-label" for="plataformas">Plataformas</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="generos[]" value="Simulación" id="simulacion">
                                    <label class="form-check-label" for="simulacion">Simulación</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="generos[]" value="Deportes" id="deportes">
                                    <label class="form-check-label" for="deportes">Deportes</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="generos[]" value="Carreras" id="carreras">
                                    <label class="form-check-label" for="carreras">Carreras</label>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <button type="submit" class="btn">Añadir Juego</button>
        </form>
    </div>
@endsection

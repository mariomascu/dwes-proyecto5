{{-- Footer --}}
<footer class="text-white py-4 mt-8">
    <div class="container">
        <div class="row">
            <!-- Columna de Información de Contacto -->
            <div class="col-md-4">
                <h5 class="mb-3 titulo-footer titulo-overgame">OVERGAME</h5>
                <p>
                    OverGame es tu mundo de videojuegos donde podrás encontrar todo lo que necesitas para disfrutar al máximo.
                </p>
                <p>
                    <strong>Dirección:</strong> Av. Arroyo del Moro, S/N. Córdoba
                </p>
                <p>
                    <strong>Correo:</strong> <a id="contacto" href="mailto:mmasalm734@g.educaand.es">contacto@overgame.com</a>
                </p>
            </div>

            <!-- Columna de Enlaces (dividida en 2 columnas internas) -->
            <div class="col-md-4 enlaces-menu">
                <h5 class="mb-3 titulo-footer">Enlaces rápidos</h5>
                <div class="row">
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li><a href="{{ route('inicio') }}" class="text-white">Inicio</a></li>
                            <li><a href="{{ route('ver') }}" class="text-white">Ver</a></li>
                            <li><a href="{{ route('anadir') }}" class="text-white">Añadir</a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li><a href="{{ route('anadir') }}" class="text-white">Editar</a></li>
                            @if (Auth::user() && Auth::user()->rol === 'administrador') <!-- Solo si es admin -->
                                <li><a href="{{ route('borrar.select') }}" class="text-white">Borrar</a></li>
                            @endif
                            <li><a href="{{ route('generos') }}" class="text-white">Géneros</a></li>
                            <li><a href="{{ route('sobre-nosotros') }}" class="text-white">Sobre Nosotros</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Columna de Redes Sociales -->
            <div class="col-md-4 rrss">
                <h5 class="mb-3 titulo-footer">Síguenos</h5>
                <a href="https://www.retrogames.cc/" class="text-white me-3"><i class="fab fa-facebook-f"></i> </a>
                <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i> </a>
                <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i> </a>
            </div>
        </div>

        <!-- Línea separadora -->
        <hr class="border-light">

        <!-- Derechos de autor -->
        <div class="text-center">
            <p>&copy; 2025 Mario Mascuñano. Todos los derechos reservados.</p>
            <p><a href="#" class="text-white">Política de privacidad</a></p>
        </div>
    </div>
</footer>
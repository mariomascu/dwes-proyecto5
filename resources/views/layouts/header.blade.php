
<!-- Navbar -->
<div class="navbar-outer">
    <div class="navbar-inner container">
        <div class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="logo" href="{{ route('inicio') }}"><img src="{{asset('/img/logo.png')}}" alt="logo" style="with:80px; height:60px; margin-right:20px;"></a>
                <a class="navbar-brand" href="{{ route('inicio') }}">PROYECTO-5</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <nav class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ route('inicio') }}">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('ver') }}">Ver</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('anadir') }}">Añadir</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('editar.select') }}">Editar</a></li>
                        
                        <li class="nav-item"><a class="nav-link" href="{{ route('borrar.select') }}">Borrar</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('generos') }}">Géneros</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('sobre-nosotros') }}">Sobre Nosotros</a></li>                        
                        
                        @guest
                            <li class="ms-3 me-3"><a class="btn btn-outline-light btn-iniciar-sesion" href="{{ route('login') }}">Iniciar sesión</a></li>
                            <li><a class="btn btn-outline-info btn-registro" href="{{ route('register') }}">Registrarse</a></li>
                        @else
                            <li class="ms-3 me-3">
                                <a class="btn btn-outline-light btn-cerrar-sesion" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    Cerrar sesión
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                            <li><span>Hola, {{ Auth::user()->name }}</span></li>
                        @endguest   

                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

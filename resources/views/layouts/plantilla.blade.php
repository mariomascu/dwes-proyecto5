<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OverGame - Tu Mundo de Videojuegos</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Boldonse&family=Lexend:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>

    {{--header--}}
    @include('layouts.header') <!--carga de la cabecera ruteada-->

    {{-- Alerta de éxito --}}
    @if (session('success'))
        <div class="alert alert-success fade show position-fixed bottom-0 end-0 mb-4 me-4" role="alert" aria-live="assertive" aria-atomic="true" style="max-width: 400px; z-index: 9999;">
            <button type="button" class="btn-close position-absolute top-0 end-0" data-bs-dismiss="alert" aria-label="Close"></button>
            {{ session('success') }}
        </div>
    @endif

    {{--contenido--}}
    @yield('content')

    {{--footer--}}
    @include('layouts.footer') <!--carga el footer de la página-->

    {{--script--}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    

</body>
</html>

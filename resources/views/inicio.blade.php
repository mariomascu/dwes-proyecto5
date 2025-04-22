@extends('layouts.plantilla')
@section('content')

<!-- Contenido principal -->
<div class="container-principal">
    <p class="text-center lead subtitulo">Tu nueva aventura empieza aquí</p>
    <h1 class="text-center page-title page-title-home">OVERGAME</h1>


    <video id="video-home" loop autoplay muted style="width: 100%; height: 100%; position: absolute; top:76px; left: 0; z-index: -100; object-fit: cover;">
        <source src="{{asset('/video/videogames.ogg') }}" type="video/ogg" />
        <source src="{{asset('/video/videogames.mp4') }}" type="video/mp4" />
        Tu navegador no soporta el video.
    </video>


</div>

@endsection

@include('layouts.header')

<div class="container mt-5">
    <h1>Sobre Nosotros</h1>
    <p>Información sobre la tarea:</p>

    <h3>Tarea realizada por {{$tarea['nombre']}} {{$tarea['apellido1']}} {{$tarea['apellido2']}}</h3>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

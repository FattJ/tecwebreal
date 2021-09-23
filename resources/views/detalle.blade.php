<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Titulo</title>
</head>
<body>
    <h1>Pantalla de Contacto</h1>

<a href="{{ route('index') }}">Regresar al inicio</a>

    <p>Nombre: {{ $nombre }} </p>
    <p>Apellido: {{ $apellido }}</p>
    <p>Tel: {{ $tel }}</p>
    <p>Correo: {{ $email }}</p>
</body>
</html>
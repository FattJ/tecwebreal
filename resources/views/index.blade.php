<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Vista</title>
</head>
<body>

	
	<h1>Bienvenido</h1>
	<p>conoce a nuestros amigos:</p>

	<ul>
		<li><a href="{{ route('detalle')}}">{{ $nombre }}</a></li>
	</ul>

</body>
</html> 
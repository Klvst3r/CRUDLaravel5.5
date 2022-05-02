<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Listado de Usuarios - Klvst3r</title>
</head>
<body>
	<h1>{{ $title }}</h1>

	<hr/>
	
	<ul>

		@forelse($users as $user)
				<li>{{ $user }} </li>

		@empty
			<p>No hay usuarios registrados</p>
		@endforelse
		
	</ul>

	{{ time() }}

</body>
</html>
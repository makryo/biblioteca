<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Crear usuario</title>
	</head>
	
	<body>
		<div align="center">
			<form method="post" action="{{ route('usuarios.store') }}">
				{{ csrf_field() }}
				<label>Formulario</label><br>
				<br>
				<input type="text" name="codigo" placeholder="codigo"><br>
				<input type="text" name="fullname" placeholder="nombre"><br>
				<input type="text" name="birthdate" placeholder="fecha de nacimiento"><br>
				<input type="text" name="is_active" placeholder="estado"><br>
				<input type="submit" name="Guardar"><br>
			</form>
		</div>
	</body>
</html>
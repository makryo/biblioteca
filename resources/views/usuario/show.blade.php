<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Vista</title>
	</head>

	<body>
		<div align="center">
			<dl>
				<dt>Codigo</dt><dd>{{ $user->codigo }}</dd>
				<dt>Nombre</dt><dd>{{ $user->fullname }}</dd>
				<dt>Fecha de nacimiento</dt><dd>{{ $user->birthdate }}</dd>
				<dt>estado</dt><dd>{{ $user->is_active }}</dd>
			</dl>

			<a href="{{ route('usuarios.index') }}">Lista</a>
			<a href="{{ route('usuarios.edit', $user->id) }}">Editar</a>
			
			<!--<form method="post" action="{{ route('usuarios.destroy', $user->id) }}">
				@csrf
				@method('DELETE')
				<input type="submit" value="Borrar" class="button">
			</form>-->

		</div>
	</body>
</html>
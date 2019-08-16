<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>edit</title>
	</head>
	
	<body>
		<div align="center">
			<form method="post" action="{{ route('usuarios.update', $Edita->id) }}">

				@csrf
				@method('PATCH')
				{{ csrf_field() }}

				<label>Formulario</label><br>
				<br>
				<input type="text" name="codigo" value="{{ $Edita->codigo }}"><br>
				<input type="text" name="fullname" value="{{ $Edita->fullname }}"><br>
				<input type="text" name="birthdate" value="{{ $Edita->birthdate }}"><br>
				<input type="text" name="is_active" value="{{ $Edita->is_active }}"><br>
				<input type="submit" name="Guardar"><br>
			</form>
		</div>
	</body>
</html>
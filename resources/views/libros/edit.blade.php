<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>edit</title>
	</head>
	
	<body>
		<div align="center">
			<form method="post" action="{{ route('libros.update', $Edita->id) }}">

				@csrf
				@method('PATCH')
				{{ csrf_field() }}

				<label>Formulario</label><br>
				<br>
				<input type="text" name="titulo" placeholder="titulo" value="{{ $Edita->titulo }}"><br>
				<input type="text" name="autor" placeholder="autor" value="{{ $Edita->autor }}"><br>
				<input type="text" name="no_pag" placeholder="numero de paginas" value="{{ $Edita->no_pag }}"><br>
				<input type="text" name="total" placeholder="total" value="{{ $Edita->total }}"><br>
				<input type="text" name="disponible" placeholder="disponible" value="{{ $Edita->disponible }}"><br>
				<input type="submit" name="Guardar"><br>
			</form>
		</div>
	</body>
</html>
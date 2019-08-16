<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Crear libro</title>
	</head>
	
	<body>
		<div align="center">
			<form method="post" action="{{ route('libros.store') }}">
				{{ csrf_field() }}
				<label>Formulario</label><br>
				<br>
				<input type="text" name="titulo" placeholder="titulo"><br>
				<input type="text" name="autor" placeholder="autor"><br>
				<input type="text" name="no_pag" placeholder="numero de paginas"><br>
				<input type="text" name="total" placeholder="total"><br>
				<input type="text" name="disponible" placeholder="disponible"><br>
				<input type="submit" name="Guardar"><br>
			</form>
		</div>
	</body>
</html>
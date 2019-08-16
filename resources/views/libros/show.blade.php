<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Vista</title>
	</head>

	<body>
		<div align="center">
			<dl>
				<dt>titulo</dt><dd>{{ $book->titulo }}</dd>
				<dt>autor</dt><dd>{{ $book->autor }}</dd>
				<dt>numero de paginas</dt><dd>{{ $book->no_pag }}</dd>
				<dt>total</dt><dd>{{ $book->total }}</dd>
				<dt>disponible</dt><dd>{{ $book->disponible }}</dd>
			</dl>

			<a href="{{ route('libros.index') }}">Lista</a>
			<a href="{{ route('libros.edit', $book->id) }}">Editar</a>
			
			

		</div>
	</body>
</html>
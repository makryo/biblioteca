<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<title>index</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	
	<body>
		<div align="center">
		<table>

			<tr>
				
				<th>titulo</th>
				<th>autor</th>
				<th>numero de paginas</th>
				<th>total</th>
				<th>disponible</th>
			</tr>	
				
			@foreach($book as $Lista)
				<tr>
					<!--<td>{{ $Lista->id }}</td>-->
					<td>{{ $Lista->titulo }}</td>
					<td>{{ $Lista->autor }}</td>
					<td>{{ $Lista->no_pag }}</td>
					<td>{{ $Lista->disponible }}</td>
					<td><a href="{{ route('libros.show', $Lista->id) }}">detalle</a></td>
				</tr>
			@endforeach
			
		</table>
		<a href="{{ route('libros.create') }}" class="button is-success">Nuevo</a>
		</div>
	</body>
</html>
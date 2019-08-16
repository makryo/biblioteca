<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<title>lend</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	
	<body>
		
		<div align="center">
		<table>

			<tr>
				<th>id</th>
				<th>nombre</th>
				<th>autor</th>
				<th>disponibles</th>
				<th>agregar a la orden</th>
				
			</tr>	
				
			@foreach($book as $book)
				<tr>
					<td>{{ $book->id }}</td>
					<td>{{ $book->titulo }}</td>
					<td>{{ $book->autor }}</td>
					<td>{{ $book->no_pag }}</td>
					
					<td><a href="/add/{{ $book->id }}">agregar a la orden</a></td>
					
				</tr>
			@endforeach
			
		</table>

		<a href="{{ route('usuarios.create') }}" class="button is-success">Nuevo</a>
		</div>
		<!--<embed src="#" autostart="false" loop="true">reprodcir</embed>!-->
	</body>
</html>
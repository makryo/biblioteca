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
				<th>codigo</th>
				<th>nombre</th>
				<th>fecha</th>
				<th>estado</th>
				<th>ordenes</th>
			</tr>	
				
			@foreach($user as $Lista)
				<tr>
					<td>{{ $Lista->id }}</td>
					<td>{{ $Lista->codigo }}</td>
					<td>{{ $Lista->fullname }}</td>
					<td>{{ $Lista->birthdate }}</td>
					<td>{{ $Lista->is_active }}</td>
					<td><a href="{{ route('usuarios.show', $Lista->id) }}">detalles</a></td>
					
				</tr>
			@endforeach
			
		</table>
		<a href="{{ route('usuarios.create') }}" class="button is-success">Nuevo</a>
		</div>
	</body>
</html>
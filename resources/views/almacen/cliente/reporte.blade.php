<!DOCTYPE html>
<html>
<head>
	<title>prueba</title>
</head>
<body>
<h1 align="center">reporte de los clientes</h1>

<table border="1" bgcolor="#45B39D" class="egt" align="center">
	<thead>
		<tr>
						<th><strong> Id</strong><br></th><br>
						<th><strong>Nombre</strong><br></th><br>
						<th><strong>Apellido paterno</strong><br></th><br>
						<th><strong>Apellido materno</strong><br></th><br>
						<th><strong>direccion</strong><br></th><br>
						<th><strong>municipio</strong><br></th><br>
						
		</tr>


		<tbody>
			@foreach($clientes as $cli)
			<tr>
							<td>{{$cli->id_clientes}}</td>
							<td>{{$cli->nombre}}</td>
							<td>{{$cli->apellido_pa}}</td>
							<td>{{$cli->apellido_ma}}</td>
							<td>{{$cli->direccion}}</td>
							<td>{{$cli->municipio}}</td>
			</tr>
			@endforeach
		</tbody>
	</thead>
</table>



</body>
</html>
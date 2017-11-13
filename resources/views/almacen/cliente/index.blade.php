@extends('layouts.admin')
@section('contenido')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3>Administracion de clientes <a href="cliente/create"><button class="btn btn-success">Nuevo</button></a></h3>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			@include('almacen.cliente.search')
		</div>		
	</div>

	<div class="row">
		<div class="col-md-12">
			{{--Recorriendo la tabla cliente y tomamos un registro  --}}
			<div class="table-responsive">
				<table class="table table-striped">
					{{--Encabezados de tabla--}}
					<thead>
						<th>Id</th>
						<th>Nombre</th>
						<th>Apellido paterno</th>
						<th>Apellido materno</th>
						<th>direccion</th>
						<th>municipio</th>
						<th>Opciones</th>
					</thead>

					@foreach($clientes as $cli)
					{{--En cada td estamos mandando los datos de la base de datos--}}
						<tr>
							<td>{{$cli->id_clientes}}</td>
							<td>{{$cli->nombre}}</td>
							<td>{{$cli->apellido_pa}}</td>
							<td>{{$cli->apellido_ma}}</td>
							<td>{{$cli->direccion}}</td>
							<td>{{$cli->municipio}}</td>
							<td>
								<a href="{{URL::action('ClienteController@edit',$cli->id_clientes)}}">
									<button class="btn btn-primary">Editar</button>
								</a>

								<a href="" data-target="#modal-delete-{{$cli->id_clientes}}" data-toggle="modal">
									<button class="btn btn-danger">Eliminar</button>
								</a>
							</td>
						</tr>
						@include('almacen.cliente.modal')
					@endforeach

				</table>
			</div>
			{{--Crea fichas con las paginas de registro--}}
			{{$clientes->render()}}

		</div>
	</div>
</div>

@endsection

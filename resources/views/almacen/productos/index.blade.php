@extends ('layouts.admin')
@section ('contenido')
<div class="container">
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Productos <a href="productos/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('almacen.productos.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Id</th>					
					<th>Producto</th>
					<th>Precio</th>
					<th>imagen</th>
					<th>Estado</th>
					<th>Stock</th>
					<th>Opciones</th>
				</thead>
               @foreach ($productos as $prod)
				<tr>
					<td>{{ $prod->id_producto}}</td>
					<td>{{ $prod->nombre}}</td>
					<td>{{ $prod->precio_venta}}</td>
					<td>
						<img src="{{asset('imagenes/productos/'.$prod->imagen.'.jpg')}}" class="img img-thumbnail" width="100px" height="100px">
					</td>
					<td>{{ $prod->estado}}</td>
					<td>{{ $prod->stockmin}}</td>
					
					<td>
						<a href="{{URL::action('ProductoController@edit',$prod->id_producto)}}"><button type="button" class="btn"><span class="glyphicon glyphicon-pencil"></span></button></a>
                         <a href="" data-target="#modal-delete-{{$prod->id_producto}}" data-toggle="modal"><button type="button" class="btn"><span class="glyphicon glyphicon-trash"></span></button></a>
					</td>
				</tr>
				{{--@include('almacen.productos.modal')--}}
				@endforeach
			</table>
		</div>
		{{$productos->render()}}
	</div>
</div>
</div>
@endsection
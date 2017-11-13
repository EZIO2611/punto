@extends('layouts.admin')
@section('contenido')

	<div class="container">
	<div class="row">
		<div  class="col-md-6">
			@if(count($errors)>0)
				<div class="alert alert-danger">
					<ul>
						@foreach($errors->all() as $error)
							<li>{{$error}}</li>
						@endforeach
					</ul>
				</div>

			@endif
		</div>
		<h3>Guardar cliente</h3>
		<div class="col-md-4">
			{!!Form::open(array('url'=>'almacen/cliente','method'=>'POST'))!!}

			{{Form::token()}}

				<div class="form-group">
					<label>Nombre</label>
					<input type="text" name="nombre" class="form-control">
				</div>

				<div class="form-group">
					<label>apellido_pa</label>
					<input type="text" name="apellido_pa" class="form-control">
				</div>

				<div class="form-group">
					<label>apellido_ma</label>
					<input type="text" name="apellido_ma" class="form-control">
				</div>

				<div class="form-group">
					<label>direccion</label>
					<input type="text" name="direccion" class="form-control">
				</div>


				<div class="form-group">
					<label>municipio</label>
					<input type="text" name="municipio" class="form-control">
				</div>



				<div class="form-group">
					<button class="btn btn-success" type="submit">Guardar</button>
					<button class="btn btn-warning" type="reset">Cancelar</button>
				</div>

			{!!Form::Close()!!}
		</div>
	</div>
</div>

@endsection


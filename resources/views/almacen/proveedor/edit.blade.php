@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar proveedor: {{ $persona->nombre}}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif
		</div>
	</div>

			{!!Form::model($persona,['method'=>'PATCH','route'=>['almacen.proveedor.update',$persona->idpersona],'files'=>'true'])!!}
            {{Form::token()}}

    <div class="row">
    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group">
            	<label for="tipo_persona">tipo de persona</label>
            	<input type="text" name="tipo_persona" required value="{{$persona->tipo_persona}}" class="form-control">
            </div>
    	</div>
    	
    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group">
            	<label for="persona">numero de documento</label>
            	<input type="text" name="nombre" required value="{{$persona->nombre}}" class="form-control">
            </div>
    	</div>
    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group">
            	<label for="tipo_documento">tipo de documento</label>
            	<input type="text" name="tipo_documento" required value="{{$persona->tipo_documento}}" class="form-control">
            </div>
    	</div>
    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group">
            	<label for="direccion">direccion</label>
            	<input type="text" name="direccion" value="{{$persona->direccion}}" class="form-control" placeholder="direccion...">
            </div>
    	</div>
    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="telefono">telefono</label>
                <input type="text" name="telefono" value="{{$persona->telefono}}" class="form-control" placeholder="telefono...">
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="email">email</label>
                <input type="email" name="email" value="{{$persona->email}}" class="form-control" placeholder="num_documento...">
            </div>
        </div>
    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
    	</div>
    </div>
			{!!Form::close()!!}		
            

@endsection
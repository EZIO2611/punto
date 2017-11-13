@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo proveedor</h3>
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
			{!!Form::open(array('url'=>'almacen/proveedor','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
            {{Form::token()}}
    


    <div class="row">
    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group">
            	<label for="tipo_persona">tipo persona</label>
            	<input type="text" name="tipo_persona" required value="{{old('tipo_persona')}}" class="form-control" placeholder="tipo persona...">
            </div>
    	</div>
    	
    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group">
            	<label for="nombre">nombre</label>
            	<input type="text" name="nombre" required value="{{old('nombre')}}" class="form-control" placeholder="nombre...">
            </div>
    	</div>
    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group">
            	<label for="tipo_documento">tipo_documento</label>
            	<input type="text" name="tipo_documento" required value="{{old('tipo_documento')}}" class="form-control" placeholder="tipo_documento...">
            </div>
    	</div>
    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group">
            	<label for="num_documento">numero documento</label>
            	<input type="text" name="num_documento" value="{{old('num_documento')}}" class="form-control" placeholder="numero de documento...">
            </div>
    	</div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="direccion">direccion</label>
                <input type="text" name="direccion" value="{{old('direccion')}}" class="form-control" placeholder="direccion...">
            </div>
        </div>
    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="telefono">telefono</label>
                <input type="text" name="telefono" value="{{old('telefono')}}" class="form-control" placeholder="telefono...">
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="email">email</label>
                <input type="text" name="email" value="{{old('email')}}" class="form-control" placeholder="email...">
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
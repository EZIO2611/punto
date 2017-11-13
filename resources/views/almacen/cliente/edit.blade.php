@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3>Editar proveedor: {{ $cliente->nombre}}</h3>
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


{!!Form::model($cliente,['method'=>'PATCH','route'=>['almacen.cliente.update',$cliente->id_clientes],'files'=>'true'])!!}
            {{Form::token()}}

    <div class="row">
    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group">
            	<label for="nombre">nombre</label>
            	<input type="text" name="nombre" required value="{{$cliente->nombre}}" class="form-control">
            </div>
    	</div>
    	
    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group">
            	<label for="apellido_pa">apellido_pa</label>
            	<input type="text" name="apellido_pa" required value="{{$cliente->apellido_pa}}" class="form-control">
            </div>
    	</div>
    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group">
            	<label for="apellido_ma">apellido_ma</label>
            	<input type="text" name="apellido_ma" required value="{{$cliente->apellido_ma}}" class="form-control">
            </div>
    	</div>
    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group">
            	<label for="direccion">direccion</label>
            	<input type="text" name="direccion" value="{{$cliente->direccion}}" class="form-control" placeholder="direccion...">
            </div>
    	</div>
    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="municipio">municipio</label>
                <input type="text" name="municipio" value="{{$cliente->municipio}}" class="form-control" placeholder="municipio...">
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
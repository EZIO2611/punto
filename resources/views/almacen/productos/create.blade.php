@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Producto</h3>
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
			{!!Form::open(array('url'=>'almacen/productos','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
            {{Form::token()}}
    <div class="row">
    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label>Departamento</label>
                <select name="id_departamento" class="form-control">
                    @foreach ($departamento as $depar)
                       <option value="{{$depar->id_departamento}}">{{$depar->departamento}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label>Marca</label>
                <select name="id_marca" class="form-control">
                    @foreach ($marca as $marc)
                       <option value="{{$marc->id_marca}}">{{$marc->tipo}}</option>
                    @endforeach
                </select>
            </div>
        </div>

       <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" required value="{{old('nombre')}}" class="form-control" placeholder="nombre del producto...">
            </div>
        </div>
        
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <input type="text" name="descripcion" required value="{{old('descripcion')}}" class="form-control" placeholder="descripcion del producto...">
            </div>
        </div>
        
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="precio_compra">Precio Compra</label>
                <input type="text" name="precio_compra" required value="{{old('precio_compra')}}" class="form-control" placeholder="nombre del producto...">
            </div>
        </div>
        

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="precio_venta">Precio Venta</label>
                <input type="text" name="precio_venta" required value="{{old('precio_venta')}}" class="form-control" placeholder="precio venta del producto...">
            </div>
        </div>
        

       <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="fecha">Fecha</label>
                <input type="text" name="fecha" required value="{{old('fecha')}}" class="form-control" placeholder="Fecha del producto...">
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="imagen">Imagen</label>
                <input type="file" name="imagen" class="form-control">
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="stockmin">Stock</label>
                <input type="text" name="stockmin" required value="{{old('stockmin')}}" class="form-control" placeholder="Stock del producto...">
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
@extends ('layouts.admin')
@section ('contenido')
<div class="container">
	<div class="row">
		<div class=" col-md-6">
			<h3>Editar Producto</h3>
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
			{!!Form::model($productos,['method'=>'PATCH','route'=>['almacen.productos.update',$productos->id_producto],'files'=>'true'])!!}
            {{Form::token()}}
    <div class="row">

    <div class=" col-md-6">
            <div class="form-group">
                <label>Departamento</label>
                <select name="id_departamento" class="form-control">
                    @foreach ($departamento as $depar)
                        @if ($depar->id_departamento==$productos->id_departamento)
                       <option value="{{$depar->id_departamento}}" selected>{{$depar->departamento}}</option>
                       @else
                       <option value="{{$depar->id_departamento}}">{{$depar->departamento}}</option>
                       @endif
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label>Marca</label>
                <select name="id_marca" class="form-control">
                    @foreach ($marca as $mar)
                        @if ($mar->id_marca==$productos->id_marca)
                       <option value="{{$mar->id_marca}}" selected>{{$mar->tipo}}</option>
                       @else
                       <option value="{{$mar->id_marca}}">{{$mar->tipo}}</option>
                       @endif
                    @endforeach
                </select>
            </div>
        </div>

    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group">
            	<label for="nombre">Nombre</label>
            	<input type="text" name="nombre" required value="{{$productos->nombre}}" class="form-control">
            </div>
    	</div>
    	
    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group">
            	<label for="descripcion">Descripcion</label>
            	<input type="text" name="descripcion" required value="{{$productos->descripcion}}" class="form-control">
            </div>
    	</div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="precio_compra">Precio Compra</label>
                <input type="text" name="precio_compra" required value="{{$productos->precio_compra}}" class="form-control">
            </div>
        </div>

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="precio_venta">Precio Venta</label>
                <input type="text" name="precio_venta" required value="{{$productos->precio_venta}}" class="form-control">
            </div>
        </div>

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="fecha">Fecha</label>
                <input type="text" name="fecha" required value="{{$productos->fecha}}" class="form-control">
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="imagen">Imagen</label>
                <input type="file" name="imagen" class="form-control">
                @if (($productos->imagen)!="")
                    <img src="{{asset('imagenes/productos/'.$productos->imagen)}}" height="300px" width="300px">
                @endif
            </div>
        </div>


    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group">
            	<label for="stockmin">Stock</label>
            	<input type="text" name="stockmin" required value="{{$productos->stockmin}}" class="form-control">
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
            
</div>
@endsection

@extends('layouts.admin')
@section('contenido')
<div class="container">
    {{--El row esta creando una fila --}}
    <div class="row">
	    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Marcas <a href="marca/create"><button class="btn btn-success">Nuevo</button></a></h3>
		 {{--Este div crea una fila donde se realizara la busqueda de datos --}}
		@include('almacen.marca.search')
	</div>
    </div>

{{--En este otro row esta creando de nuevo otra fila --}}

    <div class="row">
	    <div class="col-md-12">
	    	<div class="table-responsive">
	    		{{-- La parte table.striped funciona para que la tabla te muestre de dos colores en blanco y gris --}}
	    		<table class="table table-striped table-bordered">
	    			{{-- Encabezado de tabla --}}
	    			<thead>
	    				<th>Id</th>
	    				<th>Nombre</th>
	    				<th>Descripcion</th>
	    				<th>Opciones</th>
	    			</thead>
	    	
		   @foreach ($marca as $mar)
		         <tr>
		            <td>{{$mar->id_marca}}</td>
		         	<td>{{$mar->tipo}}</td>
		         	<td>{{$mar->descripcion}}</td>
		         	{{-- Colocamos las opciones --}}
		         	<td>
		         		<a href="{{URL::action('MarcaController@edit',$mar->id_marca)}}">
		         			
		         		<button class="btn btn-primary">Editar</button>

		         	</a>

		         		<a href="" data-target="#modal-delete-{{$mar->id_marca}}" data-toggle="modal">
		         		<button class="btn btn-danger">Eliminar</button></a>

		         	</td>
		         </tr>
		         @include('almacen.marca.modal')
		   @endforeach 
		        </table>
		    </div>
		    {{--Crea fichas con las paginas de registro --}}
		    {{$marca->render()}}
		    <h6>Este espacio es lo que hace el render</h6>
	    </div>
    </div>
</div>
@endsection
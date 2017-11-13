
@extends('layouts.admin')
@section('contenido')
<div class="container">
    {{--El row esta creando una fila --}}
    <div class="row">
	    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Administracion de Departamentos <a href="departamento/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('almacen.departamento.search')
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
	    	
		   @foreach ($departamento as $depar)
		         <tr>
		            <td>{{$depar->id_departamento}}</td>
		         	<td>{{$depar->departamento}}</td>
		         	<td>{{$depar->descripcion}}</td>
		         	{{-- Colocamos las opciones --}}
		         	<td>
		         		<a href="{{URL::action('DepartamentoController@edit',$depar->id_departamento)}}">
		         			
		         		<button class="btn btn-primary">Editar</button>

		         	</a>

		         		<a href="" data-target="#modal-delete-{{$depar->id_departamento}}" data-toggle="modal">
		         		<button class="btn btn-danger">Eliminar</button></a>

		         	</td>
		         </tr>
		         @include('almacen.departamento.modal')
		   @endforeach 
		        </table>
		    </div>
		    {{--Crea fichas con las paginas de registro --}}
		    {{$departamento->render()}}
		    <h6>Este espacio es lo que hace el render</h6>
	    </div>
    </div>
</div>
@endsection
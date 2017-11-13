@extends ('layouts.admin')
@section ('contenido')


<!--imagenes-->


<style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 50%;
      margin: auto;
  }
  </style>





<!--fin imagenes-->

<!--hola-->

<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="{{asset('imagenes/fulls/01.jpg')}}" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>regalos</h3>
          <p>hola</p>
        </div>
      </div>

      <div class="item">
        <img src="{{asset('imagenes/fulls/01.jpg')}}" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>papeleria</h3>
          <p>hola .</p>
        </div>
      </div>
    
      <div class="item">
        <img src="{{asset('imagenes/fulls/01.jpg')}}" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>para toda ocasion</h3>
          <p>hola</p>
        </div>
      </div>

      <div class="item">
        <img src="{{asset('imagenes/fulls/01.jpg')}}" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>Flowers</h3>
          <p>Beautiful flowers in Kolymbari, Crete.</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div><br><br>

<!--hola-->
<center>
<div class="row" align="center">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12" align="center">
		
		@include('almacen.proveedor.search')
	</div>
</div>
</center>


<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Id persona</th>
					<th>tipo de persona </th>
					<th>nombre</th>
					<th>tipo documento</th>
					<th>numero de documento</th>
					<th>direccion</th>
					<th>telefono</th>
					<th>email</th>
				</thead>
               @foreach ($personas as $per)
				<tr>
					<td>{{ $per->idpersona}}</td>
					<td>{{ $per->tipo_persona}}</td>
					<td>{{ $per->nombre}}</td>
					<td>{{ $per->tipo_documento}}</td>
					<td>{{ $per->num_documento}}</td>
					<td>{{ $per->direccion}}</td>
					<td>{{ $per->telefono}}</td>
					<td>{{ $per->email}}</td>


					<td>
						<a href="{{URL::action('ProveedorController@edit',$per->idpersona)}}"><button class="btn btn-info">Editar</button></a>
                         <a href="" data-target="#modal-delete-{{$per->idpersona}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				@include('almacen.proveedor.modal')
				@endforeach
			</table>
		</div>
		{{$personas->render()}}
	</div>
</div><br><br>



<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="table-responsive">
      <table class="table table-striped table-bordered table-condensed table-hover">
<a href="proveedor/create"><button class="btn btn-success">Nuevo</button></a>
</table>
</div>
</div>

@endsection
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
          <h3>Guardar Departaento</h3>
          <div class="col-md-4">
               {!!Form::model($departamento,['method'=>'PUT','route'=>['almacen.departamento.update',$departamento->id_departamento]])!!}

               {{Form::token()}}

                    <div class="form-group">
                         <label>Nombre</label>
                         <input type="text" name="departamento" class="form-control" value="{{$departamento->departamento}}">
                    </div>

                    <div class="form-group">
                         <label>descripcion </label>
                         <input type="text" name="descripcion" class="form-control" value="{{$departamento->descripcion}}">
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\ProveedorFormRequest;
use App\Proveedor;
use DB;


class ProveedorController extends Controller
{
    public function __construct()
    {
       
    }
    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $personas=DB::table('persona')
           
            
            ->where('nombre','LIKE','%'.$query.'%')
           ->where('estado','=','activo')
            ->orderBy('idpersona','asc')
            ->paginate(7);
            return view('almacen.proveedor.index',["personas"=>$personas,"searchText"=>$query]);
        }
    }
    public function create()
    {
        $persona=DB::table('persona')->where('idpersona','=','1')->get();
        return view("almacen.proveedor.create",["persona"=>$persona]);
    }
    public function store (ProveedorFormRequest $request)
    {
        $persona=new Proveedor;
        $persona->idpersona=$request->get('idpersona');
        $persona->tipo_persona=$request->get('tipo_persona');
        $persona->nombre=$request->get('nombre');
        $persona->tipo_documento=$request->get('tipo_documento');
        $persona->num_documento=$request->get('num_documento');
        $persona->direccion=$request->get('direccion');
        $persona->telefono=$request->get('telefono');
        $persona->email=$request->get('email');
        

        $persona->save();
        return Redirect::to('almacen/proveedor');

    }
    public function show($id)
    {
        return view("almacen.proveedor.show",["proveedor"=>Proveedor::findOrFail($id)]);
    }
    public function edit($id)
    {
        $persona=Proveedor::findOrFail($id);
        $personas=DB::table('persona')->where('tipo_persona','=','1')->get();
        return view("almacen.proveedor.edit",["persona"=>$persona,"personas"=>$personas]);
    }
    
    
    public function update(ProveedorFormRequest $request,$id)
    {
        $persona=Proveedor::findOrFail($id);

       
        $persona->tipo_persona=$request->get('tipo_persona');
        $persona->nombre=$request->get('nombre');
        $persona->tipo_documento=$request->get('tipo_documento');
        $persona->num_documento=$request->get('num_documento');
        $persona->direccion=$request->get('direccion');
        $persona->telefono=$request->get('telefono');
        $persona->email=$request->get('email');

        $persona->update();
        return Redirect::to('almacen/proveedor');
    }
    

    public function destroy($id)
    {
        $persona=Proveedor::findOrFail($id);
        $persona->estado='inactivo';
        $persona->update();
        return Redirect::to('almacen/proveedor');
    }
}
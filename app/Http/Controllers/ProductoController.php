<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\ProductoFormRequest;
use App\Producto;
use DB;


class ProductoController extends Controller
{
    public function __construct()
    {
       
    }
    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $producto=DB::table('productos as a')
            ->join('departamento as c','a.id_departamento','=','c.id_departamento')
            ->join('marca as d','a.id_marca','=','d.id_marca')
            ->select('a.id_producto','a.id_departamento','a.id_marca','a.nombre','a.descripcion','a.precio_compra','a.precio_venta','a.fecha','a.imagen','a.estado','a.stockmin','c.departamento as departamento','d.tipo as marca')
            ->where('a.nombre','LIKE','%'.$query.'%')
            ->orderBy('a.id_producto','desc')
            ->paginate(7);
            return view('almacen.productos.index',["productos"=>$producto,"searchText"=>$query]);
        }
    }
    public function create()
    {
        $departamento=DB::table('departamento')->get();

         $marca=DB::table('marca')->get();

        return view("almacen.productos.create",["departamento"=>$departamento,"marca"=>$marca]);
        
        //return view("almacen.productos.create",["marca"=>$marca]);
    }
    public function store (ProductoFormRequest $request)
    {
        $producto=new Producto;
        $producto->id_departamento=$request->get('id_departamento');
        $producto->id_marca=$request->get('id_marca');
        $producto->nombre=$request->get('nombre');
        $producto->descripcion=$request->get('descripcion');
        $producto->precio_compra=$request->get('precio_compra');
        $producto->precio_venta=$request->get('precio_venta');
        $producto->estado='Activo';
        $producto->stockmin=$request->get('stockmin');

        if (Input::hasFile('imagen')){
            $file=Input::file('imagen');
            $file->move(public_path().'/imagenes/productos/',$file->getClientOriginalName());
            $producto->imagen=$file->getClientOriginalName();
        }
        
        
        $producto->save();
        return Redirect::to('almacen/productos');

    }
    public function show($id)
    {
        return view("almacen.productos.show",["productos"=>Producto::findOrFail($id)]);
    }
    public function edit($id)
    {
        $producto=Producto::findOrFail($id);
        $departamento=DB::table('departamento')->get();
        return view("almacen.productos.edit",["productos"=>$producto,"departamento"=>$departamento]);

        $producto=Producto::findOrFail($id);
        $marca=DB::table('marca')->get();
        return view("almacen.productos.edit",["productos"=>$producto,"marca"=>$marca]);
    }
    
    
    public function update(ProductoFormRequest $request,$id)
    {
        $producto=Producto::findOrFail($id);

        $producto->id_departamento=$request->get('id_departamento');
        $producto->id_marca=$request->get('id_marca');
        $producto->nombre=$request->get('nombre');
        $producto->descripcion=$request->get('descripcion');
        $producto->precio_compra=$request->get('precio_compra');
        $producto->precio_venta=$request->get('precio_venta');
        $producto->fecha=$request->get('fecha');
        $producto->estado='Activo';
        $producto->stockmin=$request->get('stockmin');

         if (Input::hasFile('imagen')){
            $file=Input::file('imagen');
            $file->move(public_path().'/imagenes/productos/',$file->getClientOriginalName());
            $productos->imagen=$file->getClientOriginalName();
        }

       

        $producto->update();
        return Redirect::to('almacen/productos');
    }
    public function destroy($id)
    {
        $producto=Producto::findOrFail($id);
        $producto->Estado='Inactivo';
        $producto->update();
        return Redirect::to('almacen/productos');
    }
}

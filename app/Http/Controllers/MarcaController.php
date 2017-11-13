<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Marca;
//hacemos referencia a la clase para manejo de datos
use DB;

use App\Http\Requests\MarcaFormRequest;

use Illuminate\Support\Facades\Redirect;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
         if ($request) 
        {

            //obtengo del formulario al valor que fue escrito con el componente search
            $valor=trim($request->get('searchText'));

        //
        //cargamos los datos de la tabla 
        $marca= DB::table('marca')
        ->where('tipo','LIKE',"%$valor%")
        ->orderby('id_marca','desc')
        ->paginate(5);

        return view('almacen.marca.index')
        ->with("marca",$marca);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('almacen.marca.create');
        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MarcaFormRequest $request)
    {
        //
         $marca = new Marca;
        $marca->tipo=$request->get('tipo');
        $marca->descripcion=$request->get('descripcion');
        $marca->save();

        return Redirect::to('almacen\marca');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $marca=Marca::findOrFail($id);

        return view('almacen.marca.edit')
        ->with("marca",$marca);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MarcaFormRequest $request, $id)
    {
        //
        $marca=marca::findOrFail($id);
        $marca->tipo=$request->get('tipo');
        $marca->descripcion=$request->get('descripcion');
        $marca->update();

       return Redirect::to('almacen/marca');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         $marca=Marca::findOrFail($id);
         $marca->condicion='1';

        $marca->delete();

        return Redirect::to('almacen/marca');
    }
}

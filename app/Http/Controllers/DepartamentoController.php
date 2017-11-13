<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Departamento;
//hacemos referencia a la clase para manejo de datos
use DB;

use App\Http\Requests\DepartamentoFormRequest;

use Illuminate\Support\Facades\Redirect;

class DepartamentoController extends Controller
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
        $departamento= DB::table('departamento')
        ->where('departamento','LIKE',"%$valor%")
        ->orderby('id_departamento','desc')
        ->paginate(5);

        return view('almacen.departamento.index')
        ->with("departamento",$departamento);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('almacen.departamento.create');
        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DepartamentoFormRequest $request)
    {
        //
         $departamento = new Departamento;
        $departamento->departamento=$request->get('departamento');
        $departamento->descripcion=$request->get('descripcion');
        $departamento->save();

        return Redirect::to('almacen\departamento');
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
        $departamento=Departamento::findOrFail($id);

        return view('almacen.departamento.edit')
        ->with("departamento",$departamento);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DepartamentoFormRequest $request, $id)
    {
        //
        $departamento=departamento::findOrFail($id);
        $departamento->departamento=$request->get('departamento');
        $departamento->descripcion=$request->get('descripcion');
        $departamento->update();

       return Redirect::to('almacen/departamento');

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
         $departamento=Departamento::findOrFail($id);
         $departamento->condicion='1';
        $departamento->delete();

        return Redirect::to('almacen/departamento');
    }
}

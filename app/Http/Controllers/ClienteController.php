<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
//Hacemos referencia al modelo categoria
use App\Cliente;
//Hacemos referencia la clase que hace la validacion
use App\Http\Requests\ClienteFormRequest;
//Apuntamos a la clase para rendiringir
use Illuminate\Support\Facades\Redirect;
//Hacemos referencia a la clase para manejo de la base de datos
use DB;


class ClienteController extends Controller
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
        //Obtengo el formulario el valor que fue escrito en el camponente searchText
        $valor=trim($request->get('searchText'));
        //Cargamos los datos de la tabla categorias
        $clientes=DB::table('clientes')
        //Aqui estamos resiviendo el valor que nos mandaron para realizar la busqueda
        ->where('nombre','LIKE',"%$valor%")
        //Aqui estamos haciendo una condicon para que puedan aparecer los datos
        ->where('id_clientes','=','1')
        //Aqui estamos haciendo que se ordene de una manera descendiente
        ->orderBy('id_clientes','desc')
        //Aqui estamos haciendo una limitante para ver los datos
        ->paginate(10);

        return view('almacen.cliente.index')
        ->with("clientes", $clientes);

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Muestra el formulario de captura
        return view('almacen.cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClienteFormRequest $request)
    {
        //                                                                                                      
        $cliente = new cliente;
        $cliente->nombre=$request->get('nombre');
        $cliente->descripcion=$request->get('descripcion');
        $cliente->id_clientes='1';
        $cliente->save();

        return Redirect::to('almacen/cliente');
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
        return view("almacen.cliente.show",["cliente"=>Cliente::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente=Cliente::findOrFail($id);
        $cliente=DB::table('cliente')->where('nombre','=','1')->get();
        return view("almacen.cliente.edit",["cliente"=>$cliente,"clientes"=>$clientes]);
    }

    /**
     * Update the specifiecliented resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClienteFormRequest $request, $id)
    {
        //
        $cliente=Cliente::findOrFail($id);
        $cliente->nombre=$request->get('nombre');
        $cliente->apellido_pa=$request->get('apellido_pa');
        





        $cliente->update();

        return Redirect::to('almacen/cliente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente=Cliente::findOrFail($id);
        $cliente->estado='inactivo';
        $cliente->update();
        return Redirect::to('almacen/cliente');
    }
}

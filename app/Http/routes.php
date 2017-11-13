<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




Route::resource('inicio/softics','SofticsController');



//La ruta de tipo resource permite agrupar todas las operaciones CRUD

Route::resource('almacen/cliente','ClienteController');
Route::resource('almacen/proveedor','ProveedorController');
Route::resource('compras/proveedor','ProveedorController');
Route::resource('almacen/departamento','DepartamentoController');
Route::resource('almacen/marca','MarcaController');
Route::resource('almacen/productos','ProductoController');

Route::get('reporte', function ()

{
//return view('almacen.categoria.reporte');

	$clientes=App\Cliente::All();
	$pdf=PDF::loadview('almacen.cliente.reporte',["clientes"=>$clientes]);
	return $pdf->download('reporte.pdf');
}
);

Route::get('/', function () {
   return view('inicio.angelitos.index');
});


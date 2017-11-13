<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table='productos';

    protected $primaryKey='id_producto';

    public $timestamps=false;


    protected $fillable =[
    	'id_departamento',
        'id_marca',
        'nombre',
    	'descripcion',
        'precio_compra',
        'precio_venta',
        'fecha',
        'imagen',
        'estado',
    	'stockmin'
    	
    	
    ];

    protected $guarded =[

    ];
}

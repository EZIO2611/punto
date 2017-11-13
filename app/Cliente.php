<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    //Apuntar a una tabla
    protected $table='clientes';
    //Especificar la clave primaria
    protected $primaryKey='id_clientes';

    //Deshabilitar marcado de registros
    public $timestamps=false;

    //Defino los campos que contedran algun valor
    protected $fillable=[
    	'nombre',
    	'apellido_pa',
    	'apellido_ma',
        'direccion',
        'municipio'
    ];
}

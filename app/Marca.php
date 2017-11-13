<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    //
    //apuntar a una tabla 
    protected $table='marca';
    //Espesificar la clave primaria
    protected $primaryKey='id_marca';

    //deshabilitar marcado de registros
    public $timestamps=false;
    //Define los campos que contendran algun valor
    protected $fillable=[
'tipo',
'descripcion'
    ];

}

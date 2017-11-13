<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    //
    //apuntar a una tabla 
    protected $table='departamento';
    //Espesificar la clave primaria
    protected $primaryKey='id_departamento';

    //deshabilitar marcado de registros
    public $timestamps=false;
    //Define los campos que contendran algun valor
    protected $fillable=[
'nombre',
'descripcion'
    ];

}

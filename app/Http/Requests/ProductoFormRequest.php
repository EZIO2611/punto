<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductoFormRequest extends Request
{

    public function authorize()
    {

        
        return true;
    }

    public function rules()
    {
        return [
            'id_departamento'=>'required',
            'id_marca'=>'required',
            'nombre'=>'required|max:40',
            'descripcion'=>'required|max:50',
            'precio_compra'=>'required|max:8',
            'precio_venta'=>'required|max:8',
            'fecha'=>'required|max:10',
            'imagen'=>'mimes:jpeg,bmp,png',
            'stockmin'=>'required|numeric'
        ];
    }
}

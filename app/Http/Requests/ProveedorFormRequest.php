<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProveedorFormRequest extends Request
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
         
            'tipo_persona'=>'required|max:50',
            'nombre'=>'required|max:100',
            'tipo_documento'=>'max:10',
            'num_documento'=>'max:512',
            'direccion'=>'max:100',
            'telefono'=>'max:100',
           'email'=>'required|max:100'
        ];
    }
}


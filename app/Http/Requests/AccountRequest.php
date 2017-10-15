<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AccountRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [                        
            'account_number'     =>  'required|digits_between:10,20',            
            'alias'              =>  'required|max:20',
            'bank'               =>  'required',
            'accountType'        =>  'required',
            'currency'           =>  'required',
            /*
            'tiempo'               =>  'required|numeric|max:200|min:1',
            'fecha_inicio'         =>  'required|date|before:fecha_fin|after:yesterday',
            'fecha_fin'            =>  'required|date|after:fecha_inicio',
            */
        ];
    }
}

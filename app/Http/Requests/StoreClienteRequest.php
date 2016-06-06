<?php

namespace hortifruti\Http\Requests;

use hortifruti\Http\Requests\Request;

class StoreClienteRequest extends Request
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
            'nome_cliente' => 'required|min:5',
            'cnpj' => 'required|min:11|numeric',
            'tipo_estabelecimento' => 'required',
        ];
    }
}

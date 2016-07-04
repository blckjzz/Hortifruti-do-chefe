<?php

namespace hortifruti\Http\Requests;

class StoreUserRequest extends Request
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
            'nome' => 'required|min:5',
            'cpf'  => 'required|min:11',
            'email' => 'required|email|unique:users',
            'telefone' => 'required|min:8',
            'cargo' => 'required',
            'data_nascimento' => 'required',
            'senha' => 'required|confirmed',
        ];
    }
}

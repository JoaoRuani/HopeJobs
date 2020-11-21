<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Endereco extends FormRequest
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
            'cep' => 'required|int|max:7',
            'numero' => 'required|int|max:6',
            'logradouro' => 'required',
            'cidade' => 'required',
            'estado' => 'required',
            'bairro' => 'required',
        ];
    }
    public function messages()
    {
    return [
        'cep.required'=> 'Por favor ensia o CEP de sua residencia',
        'numero.required' => 'Por favor ensira numero de sua residencia',
        'logradouro.required' => 'Por favor ensira a rua de sua residencia',
        'cidade.required' => 'Por favor ensira a cidade que reside atualmente',
        'estado.required' => 'Por favor ensira o estádo que reside atualmente',
        'bairro.required' => 'Por favor ensira o bairro de sua residencia',

        ];
    }
}

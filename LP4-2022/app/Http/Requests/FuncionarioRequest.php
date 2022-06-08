<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FuncionarioRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => 'required|max:100',
            'dataNascimento' => 'required|date',
            'endereco' => 'required|max: 100'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Nome é obrigatório',
            'nome.max' => 'Nome tamanho máximo 150',
            'endereco.*' => 'Endereço obrigatório tamanho máximo 80',
            'dataNascimento.*' => 'Data nascimento é obrigatória'
        ];
    }

}

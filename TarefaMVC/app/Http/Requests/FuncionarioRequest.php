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
            'salario' => 'required|numeric',
            'dataNascimento' => 'required|date',
            'endereco' => 'required|max: 100',
            'telefone' => 'required|max:12',
            'email' => 'required|max:30'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Nome é obrigatório',
            'nome.max' => 'Nome tamanho máximo 100',
            'salario.required' => 'Salário é obrigatório',
            'dataNascimento.*' => 'Data nascimento é obrigatória',
            'endereco.*' => 'Endereço obrigatório tamanho máximo 80',
            'endereco.max' => 'Tamanho máximo: 80',
            'telefone.required' => 'Telefone é obrigatório',
            'telefone.max' => 'Tamanho máximo: 12',
            'email.required' => 'Por favor, digite um email válido'            
        ];
    }

}

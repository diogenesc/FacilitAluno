<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnotacaoRequest extends FormRequest
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
            'titulo' => ['required', 'string', 'max:255'],
            'conteudo' => ['required', 'string', 'max:255'],
            'cor' => ['nullable', 'string', 'max:255']
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'required' => ':attribute é um campo obrigatório',
            'max' => 'O tamanho máximo para este campo é :max',
            'string' => 'Esse campo deveria ser uma string'
        ];
    }

    public function attributes()
    {
        return [
            'titulo' => 'Título',
            'conteudo' => 'Conteúdo',
            'cor' => 'Cor'
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MetaRequest extends FormRequest
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
            'nome' => ['required', 'string', 'max:255'],
            'prioridade' => ['nullable', 'integer']
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
            'max' => 'O tamanho máximo do campo :attribute é :max',
            'string' => ':attribute campo deveria ser uma string',
            'integer' => ':attribute deveria ser um inteiro'
        ];
    }

    public function attributes()
    {
        return [
            'nome' => 'Nome',
            'prioridade' => 'Prioridade'
        ];
    }
}

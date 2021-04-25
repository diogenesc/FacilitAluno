<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MaterialRequest extends FormRequest
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
            'arquivo' => ['required', 'file']
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
            'string' => ':attribute deveria ser uma string',
            'file' => ':attribute deveria ser um arquivo'
        ];
    }

    public function attributes()
    {
        return [
            'nome' => 'Nome',
            'arquivo' => 'Arquivo'
        ];
    }
}

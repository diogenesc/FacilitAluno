<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AtividadeRequest extends FormRequest
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
            'descricao' => ['nullable', 'string', 'max:255'],
            'prioridade' => ['nullable', 'integer'],
            'marcador' => ['nullable', 'integer'],
            'cor' => ['nullable', 'string', 'max:255'],
            'data_inicio' => ['nullable', 'date'],
            'data_fim' => ['nullable', 'date'],
            'alarme' => ['nullable', 'boolean']
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
            'integer' => ':attribute deveria ser um inteiro',
            'date' => ':attribute deveria ser uma data',
            'boolean' => ':attribute deveria ser um booleano'
        ];
    }

    public function attributes()
    {
        return [
            'titulo' => 'Título',
            'descricao' => 'Descrição',
            'prioridade' => 'Prioridade',
            'marcador' => 'Marcador',
            'cor' => 'Cor',
            'data_inicio' => 'Data de início',
            'data_fim' => 'Data de fim',
            'alarme' => 'Alarme'
        ];
    }
}

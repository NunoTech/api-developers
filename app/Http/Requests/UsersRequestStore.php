<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequestStore extends FormRequest
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
            'name'      => 'required|string',
            'email'     => 'email|string',
            'sex'       => 'required|string',
            'hobby'     => 'required|string',
            'birthDate' => 'required|date',
            'password' => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            'name.required'         =>  'O campo nome é obrigatório',
            'name.string'           =>  'O campo nome deve ser uma string',
            'sex.required'          => 'O campo sexo é obrigatório',
            'sex.string'            => 'O campo sexo deve ser um string',
            'hobby.required'        => 'O campo hobby é obrigatório',
            'hobby.string'          => 'O campo hobby deve ser uma string',
            'birthDate.required'    => 'O campo de data de nascimento é obrigatório',
            'birthDate.date'        => 'Este campo deve ser uma data'
        ];

    }
}

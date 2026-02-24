<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|max:30',
            'matricula' => 'required|string|max:10|unique:users',
            'cpf' => 'required|string|max:14|unique:users',
            'data_nasc' => 'required|date',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'O campo nome é obrigatório.',
            'email.required' => 'O campo email é obrigatório.',
            'email.email' => 'O campo email deve ser um endereço de email válido.',
            'email.unique' => 'O email já está em uso.',
            'password.required' => 'O campo senha é obrigatório.',
            'password.min' => 'A senha deve ter no mínimo 6 caracteres.',
            'password.max' => 'A senha deve ter no máximo 30 caracteres.',
            'matricula.required' => 'O campo matrícula é obrigatório.',
            'matricula.max' => 'A matrícula deve ter no máximo 20 caracteres.',
            'matricula.unique' => 'A matrícula já está em uso.',
            'cpf.required' => 'O campo CPF é obrigatório.',
            'cpf.max' => 'O CPF deve ter no máximo 14 caracteres.',
            'cpf.unique' => 'O CPF já está em uso.',
            'data_nasc.required' => 'O campo data de nascimento é obrigatório.',
            'data_nasc.date' => 'O campo data de nascimento deve ser uma data válida.',
        ];
    }
}

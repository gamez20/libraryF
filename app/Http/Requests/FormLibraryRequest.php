<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormLibraryRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'isbn' => ['required'],
            'identificacionUsuario' => ['required'],
            'tipoUsuario' => ['required'],
        ];
    }

    public function attributes()
    {
        return [
            'isbn' => 'isbn',
            'identificacionUsuario' => 'Identificacion usuario',
            'tipoUsuario'=> 'tipo de usuario',

        ];
    }
}

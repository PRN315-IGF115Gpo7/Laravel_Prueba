<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpleadoRequest extends FormRequest
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
            'nombre' => 'required|min:5',
            'apellido' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El nombre no puede ser nulo',
            'nombre.min' => 'El nombre no puede contener menos de 5 caracteres',
            'apellido.required' => 'El apellido no puede ser nulo',
        ];
    }
}

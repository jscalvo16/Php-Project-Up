<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            // Reglas de validación
            "nombres" => "required|regex:/^[a-zA-Z\s]+$/u|max:30",
            "apellidos" => "required|regex:/^[a-zA-Z\s]+$/u|max:30",
            "tipoDoc" => "required",
            "numerodoc" => "required|numeric",
            "fechaNacimiento" => "required",
            "email" => "required|email|max:115",
            "rol" => "required"
        ];
    }

    public function messages()
    {
        return [
            // Mensajes personalizados
            'nombres.required' => "El campo no puede estar vacío",
            'nombres.alpha' => "El campo solo puede tener caracteres",
            'apellidos.required' => "El campo no puede estar vacío",
            'apellidos.alpha' => "El campo solo puede tener caracteres",
            'tipoDoc.required' => "El campo no puede estar vacío",
            'numerodoc.required' => "El campo no puede estar vacío",
            'numerodoc.numeric' => "El campo debe tener solo caracteres numericos",
            'email.required' => "El campo no puede estar vacío",
            'email.email' => "El campo debe ser un correo"
        ];
    }

}

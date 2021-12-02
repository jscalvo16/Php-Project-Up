<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserEditarRequest extends FormRequest
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
            "nombres" => "required|regex:/^[a-zA-ZÁÉÍÓÚÑáéíóúñ\s]+$/u|max:30",
            "apellidos" => "required|regex:/^[a-zA-ZÁÉÍÓÚÑáéíóúñ\s]+$/u|max:30",
            "tipoDoc" => "required",
            "numerodoc" => "required|numeric",
            "fechaNacimiento" => "required",
            "email" => "required|email|max:115|regex:/(.)@misena\.edu\.co/i",
            "rol" => "required"
        ];
    }

    public function messages()
    {
        return [
            // Mensajes personalizados
            'nombres.required' => "El campo no puede estar vacío",
            'nombres.max' => "El campo no puede sobrepasar los 30 caractes",
            'apellidos.required' => "El campo no puede estar vacío",
            'apellidos.max' => "El campo no puede sobrepasar los 30 caracteres",
            'tipoDoc.required' => "El campo no puede estar vacío",
            'numerodoc.required' => "El campo no puede estar vacío",
            'numerodoc.numeric' => "El campo debe tener solo caracteres numericos",
            "fechaNacimiento.required" => "El capo no puede estar vacío",
            'email.required' => "El campo no puede estar vacío",
            'email.email' => "El campo debe ser un correo",
            "email.regex" => "El correo debe ser misena"
        ];
    }
}

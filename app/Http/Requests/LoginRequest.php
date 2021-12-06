<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            "correo" => "required|regex:/(.)@misena\.edu\.co/i|exists:usuario,email",
            "contrasena" => "required",
        ];
    }

    public function messages()
    {
        return [
            // Mensajes personalizados
            "correo.required" => "Correo misena requerido",
            "correo.exists" => "El correo no se encuentra registrado",
            "correo.regex" => "Formato de correo incorrecto (Correo misena)",
            "contrasena.required" => "Contraseña requerida"
        ];
    }
}

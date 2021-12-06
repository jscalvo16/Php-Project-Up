<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest extends FormRequest
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
            "email" => "required|regex:/(.)@misena\.edu\.co/i|exists:usuario,email",
            "password" => "required|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/|max:12|min:6|confirmed"
        ];
    }

    public function messages()
    {
        return [
            // Mensajes personalizados
            "email.required" => "Correo misena requerido",
            "email.exists" => "El correo no se encuentra registrado",
            "email.regex" => "Formato de correo incorrecto (Correo misena)",
            "password.required" => 'Este campo no puede estar vacío',
            "password.regex" => "La contraseña debe tener una mayúscual una minúscula y un número",
            "password.max" => 'El campo solo puede tener máximo 12 caracteres' ,
            "password.min" => 'El campo debe tener mínimo 6 caracteres' ,
            "password.confirmed" => 'Las contraseñas no coninciden'
        ];
    }
}

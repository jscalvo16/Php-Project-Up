<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class changePasswordRequest extends FormRequest
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
            "password" => 'request|regex"/^[a-zA-Z\s]+$/u|max:12|min:6',
            "password_confirmation" => 'request|confirmed'
        ];
    }

    public function messages()
    {
        return [
            "password.request" => 'Este campo no puede estar vacío',
            "pasword.max" => 'El campo solo puede tener máximo 12 caracteres' ,
            "password.min" => 'El campo debe tener mínimo 6 caracteres' ,
            "password_confirmation.request" => 'Este campo no puede estar vacío',

        ];
    }
}

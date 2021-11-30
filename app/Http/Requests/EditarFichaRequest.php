<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditarFichaRequest extends FormRequest
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
            "numFicha" => "required|regex:/^[A-Z0-9\s]+$/u|max:11",
            "inicioEtapa" => "required|date",
            "finEtapa" => "required|date",
            "jornada" => "required"
        ];
    }
    public function messages()
    {
        return [
            "numFicha.required" => "El campo no puede estar vacío",
            "numFicha.max" => "El valor maximo debe ser 11 caracteres",
            "inicioEtapa.required" => "La fecha no puede estar vacía",
            "finEtapa.required" => "La fecha no puede estar vacía"
        ];
    }
}

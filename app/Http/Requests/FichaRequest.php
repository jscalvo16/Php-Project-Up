<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FichaRequest extends FormRequest
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
            "numFicha" => "required|regex:/^[A-Z0-9\s]+$/u|max:11|unique:ficha,NumbFich",
            "inicioEtapa" => "required|date",
            "finEtapa" => "required|date",
            "jornada" => "required|not_in:0",
            "trimestre" => "required|not_in:0",
        ];
    }

    public function messages()
    {
        return [
            "numFicha.required" => "El campo no puede estar vacío",
            "numFicha.max" => "El valor maximo debe ser 11 caracteres",
            "numFicha.unique" => "El número de ficha ya se encuentra registrado",
            "inicioEtapa.required" => "La fecha no puede estar vacía",
            "finEtapa.required" => "La fecha no puede estar vacía",
            "jornada.not_in" => "Debes seleccionar una jornada",
            "trimestre.not_in" => "Debes seleccionar una ficha",
        ];
    }
}

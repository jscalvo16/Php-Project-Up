<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AvanceRequest extends FormRequest
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
            "descAvance" => "nullable|regex:/^[a-zA-Z0-9ÁÉÍÓÚÑáéíóúñ,.;&()\s]+$/u|max:80",
            "avance" => "required|mimes:docx,doc,docm,xls,xlsm,xlsx,pptx,ppt,zip,rar,jpeg,jpg,png,txt,pdf"
        ];
    }

    public function messages()
    {
        return [
            // Mensajes personalizados
            "descAvance.regex" => "Solo se permiten números y letras y algunos carácteres especiales",
            "descAvance.max" => "La descripción no puede superar los 80 carácteres",
            "avance.required" => "Se requiere un documento como avance",
            "avance.mimes" => "El tipo de archivo suministrado no es permitido",
            "avance.max" => "El nombre del archivo es muy largo"
        ];
    }
}

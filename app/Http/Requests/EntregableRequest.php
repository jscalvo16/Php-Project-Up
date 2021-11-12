<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EntregableRequest extends FormRequest
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
            "tituloEntre" => "required|regex:/^[a-zA-Z0-9ÁÉÍÓÚÑáéíóúñ,.;&()\s]+$/u|max:50",
            "descEntre" => "nullable|regex:/^[a-zA-Z0-9ÁÉÍÓÚÑáéíóúñ,.;&()\s]+$/u",
            "fechaInicio" => "required",
            "fechaFin" => "required|after_or_equal:fechaInicio",
            "trimestre" => "required|not_in:0",
            "fases" => "required|not_in:0",
            "instructor" => "required|not_in:0",
            "archivo" => "mimes:docx,doc,docm,xls,xlsm,pptx,ppt,zip,rar,jpeg,jpg,png,txt,pdf",
            "fichas" => "required|array"
        ];
    }

    public function messages()
{
    return [
        // Mensajes personalizados
        "tituloEntre.required" => "El título del entregables es obligatorio",
        "tituloEntre.regex" => "Solo se permiten números y letras y algunos carácteres especiales",
        "tituloEntre.max" => "El campo no puede superar los 50 carácteres",
        "descEntre.regex" => "Solo se permiten números y letras y algunos carácteres especiales",
        "fechaInicio.required" => "La fecha de inicio es obligatoria",
        "fechaFin.required" => "La fecha de cierre es obligatoria",
        "fechaFin.after_or_equal" => "La fecha de cierre no puede ser anterior a la fecha de inicio",
        "trimestre.not_in" => "Debes seleccionar un trimestre",
        "fases.not_in" => "Debes seleccionar una fase",
        "instructor.not_in" => "Debes seleccionar un instructor",
        "archivo.mimes" => "El tipo de archivo suministrado no es permitido",
        "fichas.required" => "Debes seleccionar una o más fichas"
    ];
}
}

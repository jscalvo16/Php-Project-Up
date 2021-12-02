<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GrupoEditarRequest extends FormRequest
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
            'nombreProyecto'=>"required|regex:/^[a-zA-Z0-9ÁÉÍÓÚÑáéíóúñ,.;&()\s]+$/u|max:150",
            'descProyecto'=>"required|max:150|regex:/^[a-zA-Z0-9ÁÉÍÓÚÑáéíóúñ,.;&()\s]+$/u",
            'alcProyecto'=>"required|max:150|regex:/^[a-zA-Z0-9ÁÉÍÓÚÑáéíóúñ,.;&()\s]+$/u",
        ];
    }

    public function  messages()
    {
        return [
            'nombreProyecto.required'=>"El campo no puede estar vacío",
            'descProyecto.required'=>"El campo no puede esta vacío",
            'alcProyecto.required'=>"El campo no puede esta vacío",
            'nombreProyecto.regex'=>"El campo solo permite caracters alfanuméricos y algunos caracteres especiales",
            'descProyecto.regex'=>"El campo solo permite caracters alfanuméricos y algunos caracteres especiales",
            'alcProyecto.regex'=>"El campo solo permite caracters alfanuméricos y algunos caracteres especiales",
            'nombreProyecto.max'=>"El campo solo permite máximo 100 caracteres",
            'descProyecto.max'=>"El campo solo permite máximo 100 caracteres",
            'alcProyecto.max'=>"El campo solo permite máximo 100 caracteres",
        ];
    }
}

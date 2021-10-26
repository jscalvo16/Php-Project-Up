<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GrupoRequest extends FormRequest
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
            'nombreProyecto'=>"required|regex:/^[a-zA-Z0-9\s]+$/u|max:100",
            'descProyecto'=>"required|max:100|regex:/^[a-zA-Z0-9\s]+$/u",
            'alcProyecto'=>"required|max:100|regex:/^[a-zA-Z0-9\s]+$/u",

        ];
    }

    public function  messages()
    {
        return [
            'nombreProyecto.required'=>"El campo no puede estar vacío",
            'descProyecto.required'=>"El campo no puede esta vacío",
            'alcProyecto.required'=>"El campo no puede esta vacío",
            'nombreProyecto.regex'=>"El campo solo permite caracters alfanuméricos",
            'descProyecto.regex'=>"El campo solo permite caracters alfanuméricos",
            'alcProyecto.regex'=>"El campo solo permite caracters alfanuméricos",
            'nombreProyecto.max'=>"El campo solo permite máximo 100 caracteres",
            'descProyecto.max'=>"El campo solo permite máximo 100 caracteres",
            'alcProyecto.max'=>"El campo solo permite máximo 100 caracteres",

        ];
    }
}

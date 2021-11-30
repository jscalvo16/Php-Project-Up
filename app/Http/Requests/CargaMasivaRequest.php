<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CargaMasivaRequest extends FormRequest
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
            "archivo" => 'required|mimes:xls,xlsm,xlsx'
        ];
    }
    public function messages()
    {
        return [
          "archivo.required" => "El campo no puede estar vacío",
          "archivo.mimes" => "El archivo debe ser un documento de excel"
        ];
    }
}

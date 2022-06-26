<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActulizarResidenteRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "nombre" => "required|string",
            "apellidos" => "required|string",
            "correo" => "required|string|email|max:255|unique:residentes,correo,".$this->route('residente')->id,
            "edad" => "required|integer"
        ];
    }
}

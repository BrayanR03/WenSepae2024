<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateDocenteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'DocenteApellidos'=>'required',
            'DocenteNombres'=>'required',
            'DocenteDni'=>'required',
            'DocenteFechaNacimiento'=>'required',
            'DocenteTelefono'=>'required',
            
        ];
    }

    public function messages(){

        return [
            'DocenteApellidos.required'=>'El Campo Apellidos es Obligatorio',
            'DocenteNombres.required'=>'El Campo Nombres es Obligatorio',
            'DocenteDni.required'=>'El Campo Dni es Obligatorio',
            'DocenteFechaNacimiento.required'=>'El Campo Fecha Nacimiento es Obligatorio',
            'DocenteTelefono.required'=>'El Campo Telefono es Obligatorio'
        ];
    }
}

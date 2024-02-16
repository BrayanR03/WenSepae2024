<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMatriculaRequest extends FormRequest
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
            'MatriculaFechaRegistro'=>'required',
            'AlumnoID'=>'required'
        ];
    }

    public function messages(){

        return [
            'MatriculaFechaRegistro.required'=>'El Campo Fecha Registro es Obligatorio',
            'AlumnoID.required'=>'El Campo AlumnoID es Obligatorio'
        ];
    }
}

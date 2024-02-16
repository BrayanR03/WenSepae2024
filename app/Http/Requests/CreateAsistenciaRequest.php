<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAsistenciaRequest extends FormRequest
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
            'Asistencia'=>'required',
            'AsistenciaFecha'=>'required',
            'MatriculaID'=>'required',
            'CursoID'=>'required'
        ];
    }

    public function messages(){

        return [
            'Asistencia.required'=>'El Campo Asistencia es Obligatorio',
            'AsistenciaFecha.required'=>'El Campo Asistencia Fecha es Obligatorio',
            'MatriculaID.required'=>'El Campo MatriculaID es Obligatorio',
            'CursoID.required'=>'El Campo CursoID es Obligatorio'
        ];
    }
}

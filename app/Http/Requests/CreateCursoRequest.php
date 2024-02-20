<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCursoRequest extends FormRequest
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
            'CursoDescripcion'=>'required',
            'CursoFechaInicio'=>'required',
            'CursoFechaFin'=>'required',
            'Frecuencia'=>'required',
            'CursoHoraInicio'=>'required',
            'CursoHoraFin'=>'required',
            'DocenteID'=>'required'
        ];
    }

    public function messages(){
        return [
            'CursoDescripcion.required'=>'El Campo Descripcion es Obligatorio',
            'CursoFechaInicio.required'=>'El Campo Fecha Inicio es Obligatorio',
            'CursoFechaFin.required'=>'El Campo Fecha Fin es Obligatorio',
            'Frecuencia.required'=>'Debes Seleccionar Una Frecuencia',
            'CursoHoraInicio.required'=>'El Campo Hora Inicio es Obligatorio',
            'CursoHoraFin.required'=>'El Campo Hora Fin es Obligatorio',
            'DocenteID.required'=>'El Campo DocenteID es Obligatorio'
        ];
    }
}

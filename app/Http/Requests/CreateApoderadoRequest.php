<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateApoderadoRequest extends FormRequest
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
            'ApoderadoApellidos'=>'required',
            'ApoderadoNombres'=>'required',
            'ApoderadoDni'=>'required',
            'ApoderadoFechaNacimiento'=>'required',
            'ApoderadoParentesco'=>'required',
            'ApoderadoDireccion'=>'required',
            'ApoderadoCiudad'=>'required',
            'ApoderadoTelefono'=>'required',
            'ApoderadoEmail'=>'required'
        ];
    }

    public function messages(){

        return [
            'ApoderadoApellidos.required'=>'El Campo Apellido es Obligatorio',
            'ApoderadoNombres.required'=>'El Campo Nombres es Obligatorio',
            'ApoderadoDni.required'=>'El Campo Dni es Obligatorio',
            'ApoderadoFechaNacimiento.required'=>'El Campo Fecha Nacimiento es Obligatorio',
            'ApoderadoParentesco.required'=>'El Campo Parentesco es Obligatorio',
            'ApoderadoDireccion.required'=>'El Campo Direccion es Obligatorio',
            'ApoderadoCiudad.required'=>'El Campo Ciudad es Obligatorio',
            'ApoderadoTelefono.required'=>'El Campo Telefono es Obligatorio',
            'ApoderadoEmail.required'=>'El Campo Email es Obligatorio'
        ];
    }
}

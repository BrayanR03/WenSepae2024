<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAlumnoRequest extends FormRequest
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
            'AlumnoApellidos'=>'required',
            'AlumnoPrimerNombre'=>'required',
            'AlumnoSegundoNombre'=>'required',
            'AlumnoFechaNacimiento'=>'required',
            'AlumnoDni'=>'required',
            'AlumnoLugarNacimiento'=>'required',
            'AlumnoEstadoCivil'=>'required',
            'AlumnoDireccion'=>'required',
            'AlumnoSexo'=>'required',
            'AlumnoTelefono'=>'required',
            'AlumnoDistrito'=>'required',
            'AlumnoProvincia'=>'required',
            'AlumnoDepartamento'=>'required',
            'AlumnoEmail'=>'required',
            'ApoderadoID'=>'required'
        ];
    }

    public function messages(){

        return [
            'AlumnoApellidos.required'=>'El Campo Apellidos es Obligatorio',
            'AlumnoPrimerNombre.required'=>'El Campo Primer Nombre es Obligatorio',
            'AlumnoSegundoNombre.required'=>'El Campo Segundo Nombre es Obligatorio',
            'AlumnoFechaNacimiento.required'=>'El Campo FechaNacimiento es Obligatorio',
            'AlumnoDni.required'=>'El Campo Dni Es Obligatorio',
            'AlumnoLugarNacimiento.required'=>'El Campo Lugar Nacimiento es Obligatorio',
            'AlumnoEstadoCivil.required'=>'El Campo Estado Civil es Obligatorio',
            'AlumnoDireccion.required'=>'El Campo Direccion es Obligatorio',
            'AlumnoSexo.required'=>'El Campo Sexo es Obligatorio',
            'AlumnoTelefono.required'=>'El Campo Telefono es Obligatorio',
            'AlumnoDistrito.required'=>'El Campo Distrito es Obligatorio',
            'AlumnoProvincia.required'=>'El Campo Provincia es Obligatorio',
            'AlumnoDepartamento.required'=>'El Campo Departamento es Obligatorio',
            'AlumnoEmail.required'=>'El Campo Email es Obligatorio',
            'ApoderadoID.required'=>'El Campo ApoderadoID es Obligatorio'
        ];
    }
}

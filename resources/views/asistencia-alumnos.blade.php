@extends('layout')
@section('title','Asistencia-Alumno')
@section('content')

<h1>Registro de Asistencia</h1>
<form action="{{route('asistencias.store')}}" method="POST">
    @csrf
    <table>
        <tr>
            <th hidden>Curso</th>
            <th>Departamento</th>
            <th>Provincia</th>
            <th>Nro Matricula</th>
            <th>Alumno ID</th>
            <th>Alumno</th>
            <th>Asistencia</th>
        </tr>
        @foreach($alumnosregistrados as $alumno)
        <tr>
            <td hidden>{{$alumno->CursoID}}</td>
            <td>{{$alumno->Departamento}}</td>
            <td>{{$alumno->Provincia}}</td>
            <td>{{$alumno->Matricula}}</td>
            <td>{{$alumno->AlumnoID}}</td>
            <td>{{$alumno->Alumno}}</td>
            <td>
                <input type="hidden" name="asistencias[{{$alumno->AlumnoID}}][AsistenciaFecha]" value="{{ date('Y-m-d') }}">
                <input type="hidden" name="asistencias[{{$alumno->AlumnoID}}][MatriculaID]" value="{{ $alumno->Matricula }}">
                <input type="hidden" name="asistencias[{{$alumno->AlumnoID}}][CursoID]" value="{{ $alumno->CursoID }}">
                <input type="radio" name="asistencia[{{$alumno->AlumnoID}}]" value="A"> A
                <input type="radio" name="asistencia[{{$alumno->AlumnoID}}]" value="F"> F
                <input type="radio" name="asistencia[{{$alumno->AlumnoID}}]" value="J"> J
            </td>
        </tr>
        @endforeach        
    </table>
    <button type="submit">Registrar Asistencia</button>
</form>
@endsection
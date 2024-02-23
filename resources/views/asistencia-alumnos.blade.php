@extends('layout')
@section('title','Asistencia-Alumno')
@section('content')

<h1>Registro de Asistencia</h1>
<form action="#" method="POST">
    @csrf
    <table>
        <tr>
            <th>Departamento</th>
            <th>Provincia</th>
            <th>Alumno ID</th>
            <th>Alumno</th>
            <th>Asistencia</th>
        </tr>
        @foreach($alumnosregistrados as $alumno)
        <tr>
            <td>{{$alumno->Departamento}}</td>
            <td>{{$alumno->Provincia}}</td>
            <td>{{$alumno->AlumnoID}}</td>
            <td>{{$alumno->Alumno}}</td>
            <td>
                <input type="radio" name="asistencia[{{$alumno->AlumnoID}}]" value="A"> A
                <input type="radio" name="asistencia[{{$alumno->AlumnoID}}]" value="F"> F
                <input type="radio" name="asistencia[{{$alumno->AlumnoID}}]" value="J"> J
            </td>
        </tr>
        @endforeach
    </table>
    <button type="submit">Guardar Asistencia</button>
</form>
@endsection
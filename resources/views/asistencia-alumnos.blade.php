@extends('layout')
@section('title','Asistencia-Alumno')
@section('content')
<h1>Curso Asignado</h1>
<table>
    <tr>
        <th><a href="{{route('registrar-la-asistencia',$cursos->CursoID)}}">Registrar Asistencia</a></th>
        <th><a href="#">Editar Asistencias</a></th>
    </tr>
</table>
@section('contenido-adicional')

@endsection
@endsection
@extends('layout')
@section('title','Asistencias Datos')
@section('content')
    <h1>DATOS DE LAS ASISTENCIAS</h1>
    <table>
        <tr>
            <th>ASISTENCIA ID</th>
            <th>ASISTENCIA</th>
            <th>ASISTENCIA FECHA</th>
            <th>MATRICULA ID</th>
            <th>CURSO ID</th>
        </tr>
        <tr>
            <td>{{$asistencias->AsistenciaID}}</td>
            <td>{{$asistencias->Asistencia}}</td>
            <td>{{$asistencias->AsistenciaFecha}}</td>
            <td>{{$asistencias->MatriculaID}}</td>
            <td>{{$asistencias->CursoID}}</td>
        </tr>
        <tr>
            <td><a href="{{route('asistencias.edit',$asistencias)}}">EDITAR</a></td>
        </tr>
        <tr>
            <form action="{{route('asistencias.destroy',$asistencias)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('DELETE')
            <td><button>ELIMINAR</button></td>
            </form>
        </tr>
    </table>
@endsection
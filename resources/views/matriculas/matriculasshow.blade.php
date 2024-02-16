@extends('layout')
@section('title','Matriculas Datos')
@section('content')
    <h1>INFORMACION DE LA MATRICULA</h1>
    <table>
        <tr>
            <th>MATRICULA ID</th>
            <th>MATRICULA FECHA REGISTRO </th>
            <th>ALUMNO ID</th>
        </tr>
        <tr>
            <td>{{$matriculas->MatriculaID}}</td>
            <td>{{$matriculas->MatriculaFechaRegistro}}</td>
            <td>{{$matriculas->AlumnoID}}</td>
        </tr>
        <tr>
            <td><a href="{{route('matriculas.edit',$matriculas)}}">EDITAR</a></td>
        </tr>
        <tr>
            <form action="{{route('matriculas.destroy',$matriculas)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('DELETE')
            <td><button>ELIMINAR</button></td>
            </form>
        </tr>
    </table>
@endsection
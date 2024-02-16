@extends('layout')
@section('title','Curso Datos')
@section('content')
    <h1>DATOS DEL CURSO</h1>
    <table>
        <tr>
            <th>CURSO ID</th>
            <th>DESCRIPCION</th>
            <th>FECHA INICIO</th>
            <th>FECHA FIN</th>
            <th>HORA INICIO</th>
            <th>HORA FIN</th>
            <th>DOCENTE ID</th>
        </tr>
        <tr>
            <td>{{$cursos->CursoID}}</td>
            <td>{{$cursos->CursoDescripcion}}</td>
            <td>{{$cursos->CursoFechaInicio}}</td>
            <td>{{$cursos->CursoFechaFin}}</td>
            <td>{{$cursos->CursoHoraInicio}}</td>
            <td>{{$cursos->CursoHoraFin}}</td>
            <td>{{$cursos->DocenteID}}</td>
        </tr>
        <tr>
            <td><a href="{{route('cursos.edit',$cursos)}}">EDITAR</a></td>
        </tr>
        <tr>
            <form action="{{route('cursos.destroy',$cursos)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('DELETE')
            <td><button>ELIMINAR</button></td>
            </form>
        </tr>
    </table>
@endsection
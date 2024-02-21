@extends('layout')
@section('title','Curso Datos')
@section('content')
    <h1>DATOS DEL CURSO</h1>
     <table>
            <tr>
                <th>Curso ID</th><td>{{$cursos->CursoID}}</td>
            </tr>
            <tr>
                <th>Descripcion</th><td>{{$cursos->CursoDescripcion}}</td>
            </tr>
            <tr>
                <th>Fecha Inicio</th><td>{{$cursos->CursoFechaInicio}}</td>
            </tr>
            <tr>
                <th>Fecha Fin</th><td>{{$cursos->CursoFechaFin}}</td>
            </tr>
            <tr>
                <th>Frecuencia</th><td>{{$cursos->Frecuencia}}</td>
            </tr>
            <tr>
                <th>Hora Inicio</th><td>{{$cursos->CursoHoraInicio}}</td>
            </tr>
            <tr>
                <th>Hora Fin</th><td>{{$cursos->CursoHoraFin}}</td>
            </tr>
            <tr>
                <th>Docente ID</th><td>{{$cursos->DocenteID}}</td>
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
        <nav>
            <ul>
                <li><a href="{{route('asistencia.alumnos',$cursos->CursoID)}}">Asistencias</a></li>
                <li><a href="#">Notas</a></li>
                <li><a href="#">Alumnos Matriculados</a></li>
            </ul>
        </nav>
      
    
@endsection
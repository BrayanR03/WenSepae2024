@extends('layout')
@section('title','Cursos Asignados')
@section('content')
    <table>
        <tr>
            <th>Curso ID</th>
            <th>Curso</th>
            <th>Frecuencia</th>
            <th>Fecha Inicio</th>
            <th>Fecha Fin</th>
            <th>Docente Responsable</th>
        </tr>
            @if ($cursos)
                @foreach ($cursos as $cursos)
                    <tr>
                        <td>{{$cursos->CursoID}}</td>
                        <td><a href="{{route('cursos.show',$cursos->CursoID)}}">{{$cursos->CursoDescripcion}}</a></td>
                        <td>{{$cursos->Frecuencia}}</td>
                        <td>{{$cursos->CursoFechaInicio}}</td>
                        <td>{{$cursos->CursoFechaFin}}</td>
                        <td>{{$cursos->DocenteID}}</td>
                    </tr>
                    
                @endforeach
            @else
                <p>No hay Datos</p>
            @endif
            <tr>
                <td><a href="#">Regresar</a></td>
            </tr>
        
    </table>
@endsection
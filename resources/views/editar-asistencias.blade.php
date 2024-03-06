@extends('layout')
@section('title','Editar Asistencia')
@section('content')
    <h1>Editar Registro de Asistencia</h1>
    <table>
        <tr>
            <th>Asistencias Registradas</th>
            <th></th>
        </tr>
        @foreach ($fechasasistencias as $fechasasistencias)
            
            <tr>
                <td>{{$fechasasistencias->Dia}}</td>
                <td>
                    {{$fechasasistencias->FechaAsistencia}}
                </td>
                <td><a href="{{route('asistencias.edit',$fechasasistencias->FechaAsistencia)}}">Ver Aqui</a></td>
            </tr>
        @endforeach
    </table>
@endsection
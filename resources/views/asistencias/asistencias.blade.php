@extends('layout')
@section('title','Asistencias')
@section('content')
    <h1>LISTADO DE ASISTENCIAS</h1>
    @if ($asistencias)
        <table>
            <tr>
                @foreach ($asistencias as $asistencias)
                    <td><a href="{{route('asistencias.show',$asistencias->AsistenciaID)}}">{{$asistencias->AsistenciaFecha}}</a></td>
                @endforeach
            </tr>
            <tr>
                <td><a href="{{route('asistencias.create')}}">REGISTRAR NUEVAS ASISTENCIAS</a></td>
            </tr>
        </table>
    @else
        <p>No hay datos para mostrar</p>
    @endif
@endsection
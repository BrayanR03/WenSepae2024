@extends('layout')
@section('title','Alumnos')
@section('content')
    <h1>Listado de Alumnos</h1>
    @if ($alumnos)
        <table>
            <tr><th>Alumno</th></tr>
            @foreach ($alumnos as $alumnos)
                <tr>
                    <td><a href="{{route('alumnos.show',$alumnos)}}">{{$alumnos->AlumnoApellidos.','.$alumnos->AlumnoPrimerNombre}}</a></td>
                </tr>
            @endforeach
            <tr>
                <td><a href="{{route('alumnos.create')}}">Registrar Nuevo Alumno</a></td>
            </tr>
        </table>
    @else
        <p>No hay datos para mostrar</p>
    @endif
@endsection
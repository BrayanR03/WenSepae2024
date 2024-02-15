@extends('layout')
@section('title','Docentes')
@section('content')
    <h1>LISTA DE DOCENTES</h1>
    @if ($docentes)
        <table>
            <tr>
                @foreach ($docentes as $docentes)
                    <td><a href="{{route('docentes.show',$docentes->DocenteID)}}">{{$docentes->DocenteApellidos}}</a></td>
                @endforeach
            </tr>
            <tr>
                <td><a href="{{route('docentes.create')}}">REGISTRAR NUEVO DOCENTE</a></td>
            </tr>
        </table>
    @else
        <p>No hay datos para mostrar</p>
    @endif
@endsection
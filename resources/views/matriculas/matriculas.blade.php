@extends('layout')
@section('title','Matriculas')
@section('content')
    <h1>LISTADO DE MATRICULAS</h1>
    @if ($matriculas)
        <table>
            <tr>
                @foreach ($matriculas as $matriculas)
                    <td><a href="{{route('matriculas.show',$matriculas)}}">{{$matriculas->MatriculaFechaRegistro}}</a></td>
                @endforeach
            </tr>
            <tr>
                <td><a href="{{route('matriculas.create')}}">REGISTRAR NUEVA MATRICULA</a></td>
            </tr>
        </table>
    @else
        <p>No hay Datos para mostrar</p>
    @endif
@endsection
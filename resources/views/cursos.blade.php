@extends('layout')
@section('title','Cursos')
@section('content')
    <h1>LISTA DE CURSOS</h1>
    @if ($cursos)
        <table>
            <tr>
                @foreach ($cursos as $cursos)
                    <td><a href="{{route('cursos.show',$cursos->CursoID)}}">{{$cursos->CursoDescripcion}}</a></td>
                @endforeach
            </tr>
            <tr>
                <td><a href="{{route('cursos.create')}}">REGISTRAR NUEVO CURSO</a></td>
            </tr>
        </table>
    @else
        <p>No hay Datos Para Mostrar</p>
    @endif
@endsection
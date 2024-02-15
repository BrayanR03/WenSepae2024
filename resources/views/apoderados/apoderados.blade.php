@extends('layout')
@section('title','Apoderados')
@section('content')
    <h1>Lista de Apoderados</h1>
    @if ($apoderados)
        <table>
            <tr>
                @foreach ($apoderados as $apoderados)
                    <td><a href="{{route('apoderados.show',$apoderados)}}">{{$apoderados->ApoderadoApellidos}}</a></td>
                @endforeach
            </tr>
            <tr>
                <td><a href="{{route('apoderados.create')}}">REGISTRAR NUEVO APODERADO</a></td>
            </tr>
        </table>
    @else
        <p>No hay datos</p>
    @endif
@endsection
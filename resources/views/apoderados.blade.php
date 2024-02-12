@extends('layout')
@section('title','Apoderados')
@section('content')
    <h1>Lista de Apoderados</h1>
    @if ($apoderados)
        <table>
            <tr>
                @foreach ($apoderados as $apoderados)
                    <td><a href="{{route('apoderado.show',$apoderados->ApoderadoID)}}">{{$apoderados->ApoderadoApellidos}}</a></td>
                @endforeach
            </tr>
        </table>
    @else
        <p>No hay datos</p>
    @endif
@endsection
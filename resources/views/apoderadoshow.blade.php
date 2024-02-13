@extends('layout')
@section('title','Apoderado |')
@section('content')
    <h1>Datos del Apoderado</h1>
    <table>
        <tr>
            <th>Apoderado ID</th>
            <th>Apoderado Apellidos</th>
            <th>Apoderado Nombres</th>
            <th>Apoderado Dni</th>
            <th>Apoderado Fecha Nacimiento</th>
            <th>Apoderado Parentesco</th>
            <th>Apoderado Direccion</th>
            <th>Apoderado Ciudad</th>
            <th>Apoderado Telefono</th>
            <th>Apoderado Email</th>
        </tr>
        <tr>
            <td>{{$apoderados->ApoderadoID}}</td>
            <td>{{$apoderados->ApoderadoApellidos}}</td>
            <td>{{$apoderados->ApoderadoNombres}}</td>
            <td>{{$apoderados->ApoderadoDni}}</td>
            <td>{{$apoderados->ApoderadoFechaNacimiento}}</td>
            <td>{{$apoderados->ApoderadoParentesco}}</td>
            <td>{{$apoderados->ApoderadoDireccion}}</td>
            <td>{{$apoderados->ApoderadoCiudad}}</td>
            <td>{{$apoderados->ApoderadoTelefono}}</td>
            <td>{{$apoderados->ApoderadoEmail}}</td>
        </tr>
        <tr>
            <td><a href="{{route('apoderado.edit',$apoderados->ApoderadoID)}}">EDITAR</a></td>
        </tr>
        <tr>
            <form action="{{route('apoderado.destroy',$apoderados)}}" method="post" enctype="multipart/form-data">
            @method('DELETE')
            <button>Eliminar</button>
            </form>
        </tr>
    </table>
@endsection
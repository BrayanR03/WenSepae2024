@extends('layout')
@section('title','Datos')
    @section('content')
        <h1>DATOS DEL DOCENTE</h1>
        <table>
            <tr>
                <th>DOCENTE ID</th>
                <th>APELLIDOS</th>
                <th>NOMBRES</th>
                <th>DNI</th>
                <th>FECHA DE NACIMIENTO</th>
                <th>TELEFONO</th>
            </tr> 
            <tr>
                
                <td>{{$docentes->DocenteID}}</td>
                <td>{{$docentes->DocenteApellidos}}</td>
                <td>{{$docentes->DocenteNombres}}</td>
                <td>{{$docentes->DocenteDni}}</td>
                <td>{{$docentes->DocenteFechaNacimiento}}</td>
                <td>{{$docentes->DocenteTelefono}}</td>
            </tr>   
            <tr>
                <td><a href="{{route('docentes.edit',$docentes)}}">EDITAR</a></td>
            </tr>
            <tr>
                <form action="{{route('docentes.destroy',$docentes)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('DELETE')
                <button>ELIMINAR</button>
                </form>
            </tr>
        </table>    
    
@endsection
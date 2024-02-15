@extends('layout')
@section('title','Alumno')
@section('content')
    
    <h1>Datos Del Alumno</h1>
    <table>
        <tr>
            <th>APELLIDOS</th>
            <th>PRIMER NOMBRE</th>
            <th>SEGUNDO NOMBRE</th>
            <th>FECHA DE NACIMIENTO</th>
            <th>DNI</th>
            <th>LUGAR DE NACIMIENTO</th>
            <th>ESTADO CIVIL</th>
            <th>DIRECCION</th>
            <th>SEXO</th>
            <th>TELEFONO</th>
            <th>DISTRITO</th>
            <th>PROVINCIA</th>
            <th>DEPATARMENTO</th>
            <th>EMAIL</th>
            <th>APODERADO ID</th>
        </tr>
        <tr>
            <td>{{$alumnos->AlumnoApellidos}}</td>
            <td>{{$alumnos->AlumnoPrimerNombre}}</td>
            <td>{{$alumnos->AlumnoSegundoNombre}}</td>
            <td>{{$alumnos->AlumnoFechaNacimiento}}</td>
            <td>{{$alumnos->AlumnoDni}}</td>
            <td>{{$alumnos->AlumnoLugarNacimiento}}</td>
            <td>{{$alumnos->AlumnoEstadoCivil}}</td>
            <td>{{$alumnos->AlumnoDireccion}}</td>
            <td>{{$alumnos->AlumnoSexo}}</td>
            <td>{{$alumnos->AlumnoTelefono}}</td>
            <td>{{$alumnos->AlumnoDistrito}}</td>
            <td>{{$alumnos->AlumnoProvincia}}</td>
            <td>{{$alumnos->AlumnoDepartamento}}</td>
            <td>{{$alumnos->AlumnoEmail}}</td>
            <td>{{$alumnos->ApoderadoID}}</td>
        </tr>
        <tr>
            <td><a href="{{route('alumnos.edit',$alumnos)}}">EDITAR</a></td>
        </tr>
        <tr>
            <form action="{{route('alumnos.destroy',$alumnos)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('DELETE')
            <button>ELIMINAR</button>
            </form>
        </tr>
    </table>
@endsection
@extends('layout')
@section('title','EditarAsistencias')
@section('content')
    <h1>EDITAR ASISTENCIAS</h1>
    @include('partials.validations-errors')
    <form action="#" method="post" enctype="multipart/form-data">
    @method('PATCH')
    @csrf
<table>
    <tr>
        <th hidden>Curso</th>
        <th>Departamento</th>
        <th>Provincia</th>
        <th>Nro Matricula</th>
        <th>Alumno ID</th>
        <th>Alumno</th>
        <th>Asistencia</th>
    </tr>
    @foreach($alumnosregistrados as $alumno)
    
    <tr>
        <td hidden>{{$alumno->CursoID}}</td>
        <td>{{$alumno->Departamento}}</td>
        <td>{{$alumno->Provincia}}</td>
        <td class="matriculaidalumno" name="matriculaidalumno" id="matriculaidalumno">{{$alumno->Matricula}}</td>
        <td>{{$alumno->AlumnoID}}</td>
        <td>{{$alumno->Alumno}}</td>
        <td>
            <input type="hidden" name="asistencias[{{$alumno->AlumnoID}}][MatriculaID]" value="{{ $alumno->Matricula }}">
            <input type="hidden" name="asistencias[{{$alumno->AlumnoID}}][CursoID]" value="{{ $alumno->CursoID }}">
            <input type="radio" class="Asistencia" id="AsistenciaA{{$alumno->AlumnoID}}" name="Asistencia[{{$alumno->AlumnoID}}]" value="A" @if($alumno->Asistencia == 'A') checked @endif> A
            <input type="radio" class="Asistencia" id="AsistenciaF{{$alumno->AlumnoID}}" name="Asistencia[{{$alumno->AlumnoID}}]" value="F" @if($alumno->Asistencia == 'F') checked @endif> F
            <input type="radio" class="Asistencia" id="AsistenciaJ{{$alumno->AlumnoID}}" name="Asistencia[{{$alumno->AlumnoID}}]" value="J" @if($alumno->Asistencia == 'J') checked @endif> J
        </td>
    </tr>
    @endforeach        
</table>
@foreach ($asistencias as $asistencias)

<table>
    <tr>
        <td><input type="text" name="asistenciaAlumno" id="asistenciaAlumno" readonly></td>
    </tr>
    <tr>
        <th hidden>Fecha Asistencia</th>
        <td><input hidden type="date" name="AsistenciaFecha" id="AsistenciaFecha" value="{{old('AsistenciaFecha',date('Y-m-d'))}}"></td>
    </tr>
    <tr>
        <td><input type="text" name="MatriculaID" id="MatriculaID" value="{{old('MatriculaID',$asistencias->Matricula)}}"></td>
    </tr>
    <tr>
        <td><input type="text" name="CursoID" id="CursoID" value="{{old('CursoID',$asistencias->CursoID)}}"></td>
    </tr>    
    @endforeach
    <tr>
        <td><button>Actualizar</button></td>
    </tr>
</table>
<!--<script>
    let asistenciasSeleccionada=[];
    let opciones=document.querySelectorAll('input[type="radio"]');
    let resultado=document.getElementById('asistenciaAlumno');
    opciones.forEach(opcion => {
        opcion.addEventListener('change',()=>{
            if(opcion.checked){
                resultado.value=opcion.value;
                asistenciasSeleccionada.push(opcion.value);
                document.getElementById('asistenciaAlumno').value=asistenciasSeleccionada.join(',');
            }
        })
    });
    
</script>-->

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var asistenciaRadios = document.querySelectorAll('.Asistencia');
        let idsMatriculasAlumnos=[];
        let asistenciasAlumnos=[];
        let opciones=document.querySelectorAll('input[type="radio"]');
        let resultado=document.getElementById('asistenciaAlumno');
        asistenciaRadios.forEach(function(radio) {
            radio.addEventListener('change', function() {
                var matriculaID = this.closest('tr').querySelector('.matriculaidalumno').textContent;
                var cursoID = this.closest('tr').querySelector('td:first-child').textContent;
                var fechaAsistencia = document.getElementById('AsistenciaFecha').value;
                if (!idsMatriculasAlumnos.includes(matriculaID)) {
                    idsMatriculasAlumnos.push(matriculaID);
                    resultado.value=radio.value;
                    asistenciasAlumnos.push(radio.value);
                    document.getElementById('asistenciaAlumno').value=asistenciasAlumnos.join(',');
                }
            
                document.getElementById('MatriculaID').value = idsMatriculasAlumnos;
                document.getElementById('CursoID').value = cursoID;
                //document.getElementById('asistenciaAlumno').value=asistenciasAlumnos;
                console.log(idsMatriculasAlumnos);
                console.log(cursoID);
                console.log(fechaAsistencia);
            });
        });
    });
</script>

    </form>
@endsection
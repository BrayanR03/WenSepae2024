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
            <input type="radio" class="Asistencia" id="Asistencia" name="Asistencia[{{$alumno->AlumnoID}}]" value="A"> A
            <input type="radio" class="Asistencia" id="Asistencia" name="Asistencia[{{$alumno->AlumnoID}}]" value="F"> F
            <input type="radio" class="Asistencia" id="Asistencia" name="Asistencia[{{$alumno->AlumnoID}}]" value="J"> J
        </td>
    </tr>
    @endforeach        
</table>
<table>
    <tr>
        <th>Asistencia</th>
        <td><input type="text" name="asistenciaAlumno" id="asistenciaAlumno"></td>
    </tr>
    <tr>
        <th>Fecha Asistencia</th>
        <td><input type="date" name="AsistenciaFecha" id="AsistenciaFecha" value="{{old('AsistenciaFecha',date('Y-m-d'))}}"></td>
    </tr>
    <tr>
        <th>Matricula ID</th>
        <td><input type="text" name="MatriculaID" id="MatriculaID" value="{{old('MatriculaID',$asistencias->MatriculaID)}}"></td>
    </tr>
    <tr>
        <th>CursoID</th>
        <td><input type="text" name="CursoID" id="CursoID" value="{{old('CursoID',$asistencias->CursoID)}}"></td>
    </tr>
    <tr>
        <td><button>{{$btnText}}</button></td>
    </tr>
</table>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var asistenciaRadios = document.querySelectorAll('.Asistencia');
        let idsMatriculasAlumnos=[];
        let asistenciasAlumnos=[];
        asistenciaRadios.forEach(function(radio) {
            radio.addEventListener('change', function() {
                var matriculaID = this.closest('tr').querySelector('.matriculaidalumno').textContent;
                var cursoID = this.closest('tr').querySelector('td:first-child').textContent;
                var fechaAsistencia = document.getElementById('AsistenciaFecha').value;
                var asistenciaAlumnoCurso=this.closest('tr').querySelector('.Asistencia').textContent;
                if (!idsMatriculasAlumnos.includes(matriculaID)) {
                    idsMatriculasAlumnos.push(matriculaID);
                }
                if(!asistenciasAlumnos.includes(asistenciaAlumnoCurso)){
                    asistenciasAlumnos.push(asistenciaAlumnoCurso);
                }
                document.getElementById('MatriculaID').value = idsMatriculasAlumnos;
                document.getElementById('CursoID').value = cursoID;
                document.getElementById('asistenciaAlumno').value=asistenciasAlumnos;
                console.log(idsMatriculasAlumnos);
                console.log(cursoID);
                console.log(fechaAsistencia);
            });
        });
    });
</script>
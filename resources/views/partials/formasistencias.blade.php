@csrf
<table>
    <tr>
        <th>ASISTENCIA</th>
        <td>
            <form>
                <input type="radio" id="asistio" name="Asistencia" value="A" {{ old('Asistencia', isset($asistencias) ? $asistencias : '') == 'A' ? 'checked' : '' }}>
                <label for="asistio">Asistió</label><br>
              
                <input type="radio" id="falto" name="Asistencia" value="F" {{ old('Asistencia', isset($asistencias) ? $asistencias : '') == 'F' ? 'checked' : '' }}>
                <label for="falto">Faltó</label><br>
              
                <input type="radio" id="justificado" name="Asistencia" value="J" {{ old('Asistencia', isset($asistencias) ? $asistencias : '') == 'J' ? 'checked' : '' }}>
                <label for="justificado">Justificado</label><br>
              </form>
              
        </td>
    </tr>
    <tr>
        <th>Fecha Asistencia</th>
        <td><input type="date" name="AsistenciaFecha" id="AsistenciaFecha" value="{{old('AsistenciaFecha',$asistencias->AsistenciaFecha)}}"></td>
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
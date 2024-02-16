@csrf
<table>
    <tr>
        <th>DESCRIPCION</th>
        <td><input type="text" name="CursoDescripcion" id="CursoDescripcion" value="{{old('CursoDescripcion',$cursos->CursoDescripcion)}}"></td>
    </tr>
    <tr>
        <th>FECHA INICIO</th>
        <td><input type="date" name="CursoFechaInicio" id="CursoFechaInicio" value="{{old('CursoFechaInicio',$cursos->CursoFechaInicio)}}"></td>
    </tr>
    <tr>
        <th>FECHA FIN</th>
        <td><input type="date" name="CursoFechaFin" id="CursoFechaFin" value="{{old('CursoFechaFin',$cursos->CursoFechaFin)}}"></td>
    </tr>
    <tr>
        <th>HORA INICIO</th>
        <td><input type="text" name="CursoHoraInicio" id="CursoHoraInicio" value="{{old('CursoHoraInicio',$cursos->CursoHoraInicio)}}"></td>
    </tr>
    <tr>
        <th>HORA FIN</th>
        <td><input type="text" name="CursoHoraFin" id="CursoHoraFin" value="{{old('CursoHoraFin',$cursos->CursoHoraFin)}}"></td>
    </tr>
    <tr>
        <th>DOCENTE ID</th>
        <td><input type="text" name="DocenteID" id="DocenteID" value="{{old('DocenteID',$cursos->DocenteID)}}"></td>
    </tr>
    <tr>
        <td><button>{{$btnText}}</button></td>
    </tr>
</table>
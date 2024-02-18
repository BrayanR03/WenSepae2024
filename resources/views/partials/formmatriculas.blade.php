@csrf

<table>
    <tr>
        <th>FECHA DE REGISTRO</th>
        <td><input type="date" name="MatriculaFechaRegistro" id="MatriculaFechaRegistro" value="<?php echo date("Y-m-d");?>"></td>
    </tr>
    <tr>
        <th>AlumnoID</th>
        <td>  <input type="text" name="AlumnoID" id="AlumnoID" value="{{old('AlumnoID',$matriculas->AlumnoID)}}"></td>
        
    </tr>
    <tr>
        <td><button>{{$btnText}}</button></td>
    </tr>
</table>

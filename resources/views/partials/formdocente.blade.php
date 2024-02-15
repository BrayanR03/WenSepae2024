@csrf
<table>
    <tr>
        <th>APELLIDOS</th>
        <td><input type="text" name="DocenteApellidos" id="DocenteApellidos" value="{{old('DocenteApellidos',$docentes->DocenteApellidos)}}"></td>
    </tr>
    <tr>
        <th>NOMBRES</th>
        <td><input type="text" name="DocenteNombres" id="DocenteNombres" value="{{old('DocenteNombres',$docentes->DocenteNombres)}}"></td>
    </tr>
    <tr>
        <th>DNI</th>
        <td><input type="text" name="DocenteDni" id="DocenteDni" value="{{old('DocenteDni',$docentes->DocenteDni)}}"></td>
    </tr>
    <tr>
        <th>FECHA DE NACIMIENTO</th>
        <td><input type="date" name="DocenteFechaNacimiento" id="DocenteFechaNacimiento" value="{{old('DocenteFechaNacimiento',$docentes->DocenteFechaNacimiento)}}"></td>
    </tr>
    <tr>
        <th>TELEFONO</th>
        <td><input type="text" name="DocenteTelefono" id="DocenteTelefono" value="{{old('DocenteTelefono',$docentes->DocenteTelefono)}}"></td>
    </tr>
    <tr>
        <td><button>{{$btnText}}</button></td>
    </tr>
</table>
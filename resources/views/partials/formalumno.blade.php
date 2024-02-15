@csrf
<table>
    <tr>
        <th>APELLIDOS</th>
        <td><input type="text" name="AlumnoApellidos" id="AlumnoApellidos" value="{{old('AlumnoApellidos',$alumnos->AlumnoApellidos)}}"></td>
    </tr>
    <tr>
        <th>PRIMER NOMBRE</th>
        <td><input type="text" name="AlumnoPrimerNombre" id="AlumnoPrimerNombre" value="{{old('AlumnoPrimerNombre',$alumnos->AlumnoPrimerNombre)}}"></td>
    </tr>
    <tr>
        <th>SEGUNDO NOMBRE</th>
        <td><input type="text" name="AlumnoSegundoNombre" id="AlumnoSegundoNombre" value="{{old('AlumnoSegundoNombre',$alumnos->AlumnoSegundoNombre)}}"></td>
    </tr>
    <tr>
        <th>FECHA NACIMIENTO</th>
        <td><input type="date" name="AlumnoFechaNacimiento" id="AlumnoFechaNacimiento" value="{{old('AlumnoFechaNacimiento',$alumnos->AlumnoFechaNacimiento)}}"></td>
    </tr>
    <tr>
        <th>DNI</th>
        <td><input type="text" name="AlumnoDni" id="AlumnoDni" value="{{old('AlumnoDni',$alumnos->AlumnoDni)}}"></td>
    </tr>
    <tr>
        <th>LUGAR NACIMIENTO</th>
        <td><input type="text" name="AlumnoLugarNacimiento" id="AlumnoLugarNacimiento" value="{{old('AlumnoLugarNacimiento',$alumnos->AlumnoLugarNacimiento)}}"></td>
    </tr>
    <tr>
        <th>ESTADO CIVIL</th>
        <td><input type="text" name="AlumnoEstadoCivil" id="AlumnoEstadoCivil" value="{{old('AlumnoEstadoCivil',$alumnos->AlumnoEstadoCivil)}}"></td>
    </tr>
    <tr>
        <th>DIRECCION</th>
        <td><input type="text" name="AlumnoDireccion" id="AlumnoDireccion" value="{{old('AlumnoDireccion',$alumnos->AlumnoDireccion)}}"></td>
    </tr>
    <tr>
        <th>SEXO</th>
        <td><input type="text" name="AlumnoSexo" id="AlumnoSexo" value="{{old('AlumnoSexo',$alumnos->AlumnoSexo)}}"></td>
    </tr>
    <tr>
        <th>TELEFONO</th>
        <td><input type="text" name="AlumnoTelefono" id="AlumnoTelefono" value="{{old('AlumnoTelefono',$alumnos->AlumnoTelefono)}}"></td>
    </tr>
    <tr>
        <th>DISTRITO</th>
        <td><input type="text" name="AlumnoDistrito" id="AlumnoDistrito" value="{{old('AlumnoDistrito',$alumnos->AlumnoDistrito)}}"></td>
    </tr>
    <tr>
        <th>PROVINCIA</th>
        <td><input type="text" name="AlumnoProvincia" id="AlumnoProvincia" value="{{old('AlumnoProvincia',$alumnos->AlumnoProvincia)}}"></td>
    </tr>
    <tr>
        <th>DEPATARMENTO</th>
        <td><input type="text" name="AlumnoDepartamento" id="AlumnoDepartamento" value="{{old('AlumnoDepartamento',$alumnos->AlumnoDepartamento)}}"></td>
    </tr>
    <tr>
        <th>EMAIL</th>
        <td><input type="email" name="AlumnoEmail" id="AlumnoEmail" value="{{old('AlumnoEmail',$alumnos->AlumnoEmail)}}"></td>
    </tr>
    <tr>
        <th>APODERADO ID</th>
        <td><input type="text" name="ApoderadoID" id="ApoderadoID" value="{{old('ApoderadoID',$alumnos->ApoderadoID)}}"></td>
    </tr>
    <tr>
        <td><button>{{$btnText}}</button></td>
    </tr>
</table>
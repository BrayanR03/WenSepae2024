@csrf
<table>
    <tr>
        <th>Apellidos</th>
        <td><input type="text" name="ApoderadoApellidos" id="ApoderadoApellidos" value="{{old('ApoderadoApellidos',$apoderados->ApoderadoApellidos)}}"></td>
    </tr>
    <tr>
        <th>Nombres</th>
        <td><input type="text" name="ApoderadoNombres" id="ApoderadoNombres" value="{{old('ApoderadoNombres',$apoderados->ApoderadoNombres)}}"></td>
    </tr>
    <tr>
        <th>Dni</th>
        <td><input type="text" name="ApoderadoDni" id="ApoderadoDni" value="{{old('ApoderadoDni',$apoderados->ApoderadoDni)}}"></td>
    </tr>
    <tr>
        <th>Fecha Nacimiento</th>
        <td><input type="date" name="ApoderadoFechaNacimiento" id="ApoderadoFechaNacimiento" value="{{old('ApoderadoFechaNacimiento',$apoderados->ApoderadoFechaNacimiento)}}"></td>
    </tr>
    <tr>
        <th>Parentesco</th>
        <td><input type="text" name="ApoderadoParentesco" id="ApoderadoParentesco" value="{{old('ApoderadoParentesco',$apoderados->ApoderadoParentesco)}}"></td>
    </tr>
    <tr>
        <th>Direccion</th>
        <td><input type="text" name="ApoderadoDireccion" id="ApoderadoDireccion" value="{{old('ApoderadoDireccion',$apoderados->ApoderadoDireccion)}}"></td>
    </tr>
    <tr>
        <th>Ciudad</th>
        <td><input type="text" name="ApoderadoCiudad" id="ApoderadoCiudad" value="{{old('ApoderadoCiudad',$apoderados->ApoderadoCiudad)}}"></td>
    </tr>
    <tr>
        <th>Telefono</th>
        <td><input type="text" name="ApoderadoTelefono" id="ApoderadoTelefono" value="{{old('ApoderadoTelefono',$apoderados->ApoderadoTelefono)}}"></td>
    </tr>
    <tr>
        <th>Email</th>
        <td><input type="email" name="ApoderadoEmail" id="ApoderadoEmail" value="{{old('ApoderadoEmail',$apoderados->ApoderadoEmail)}}"></td>
    </tr>
    <tr>
        <td><button>{{$btnText}}</button></td>
    </tr>
    <tr>
        <td><a href="{{route('apoderados.index')}}">REGRESAR</a></td>
    </tr>
</table>
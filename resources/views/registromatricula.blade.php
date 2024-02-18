@extends('layout')
@section('title','Registrar Matricula')
@section('content')
    <h1>Registrar Matricula</h1>
    <form action="{{route('buscarAlumno')}}" method="GET">
        <input type="radio" name="tipo_busqueda" value="AlumnoDni" checked> Por DNI
        <input type="radio" name="tipo_busqueda" value="AlumnoApellidos"> Por Apellidos <br><br>
    
        <label for="dni_apellidos">DNI o Apellidos:</label>
        <input type="text" name="dni_apellidos" id="dni_apellidos">
    
        <button type="submit">Buscar</button>
    </form>
    <table>
        <tr>
            <th>Datos Alumno</th>
        <td>
            <input type="text" name="datosalumno" id="datosalumno" value="{{old('datosalumno')}}">
        </td>
        </tr>
        <tr>
            <th>Alumno ID</th>
            <td>
                <input type="text" name="alumnoid" id="alumnoid" value="{{old('alumnoid')}}">
            </td>
        </tr>
    </table>
    
    <script>
        $(document).ready(function() {
            $('form').submit(function(event) {
                event.preventDefault(); // Evita el envío del formulario
    
                var formData = $(this).serialize(); // Serializa los datos del formulario
    
                $.ajax({
                    type: 'GET',
                    url: $(this).attr('action'),
                    data: formData,
                    dataType: 'json',
                    success: function(response) {
                        $('#datosalumno').val(response.datosalumno);
                        $('#alumnoid').val(response.alumnoid);
                    }
                });
            });
        });
    </script>
    
@endsection
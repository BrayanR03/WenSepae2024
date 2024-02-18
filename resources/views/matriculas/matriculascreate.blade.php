@extends('layout')
@section('title','Registrar Matricula')
@section('content')
    <h1>REGISTRAR MATRICULA</h1>
    @include('partials.validations-errors')
    <form id="form-buscar-alumno" action="{{route('buscarAlumno')}}" method="GET">
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
    // Escuchar el envío del formulario de búsqueda de alumno
    $('#form-buscar-alumno').submit(function(event) {
        event.preventDefault(); // Evitar envío normal del formulario
        
        // Serializar datos del formulario
        var formData = $(this).serialize();
        
        // Hacer petición AJAX para buscar alumno
        $.ajax({
            type: 'GET',
            url: $(this).attr('action'),
            data: formData,
            dataType: 'json',
            success: function(response) {
                // Actualizar los inputs con los datos recibidos
                $('#datosalumno').val(response.datosalumno);
                $('#alumnoid').val(response.alumnoid);
                
                // Ocultar el cuadro de diálogo de alerta si estaba mostrándose
                if ($('#alert-dialog').length) {
                    $('#alert-dialog').hide();
                }
            },
            error: function(xhr, status, error) {
                // Manejar errores si es necesario
                if (xhr.status == 404) {
                    // Mostrar cuadro de diálogo de alerta en caso de alumno no encontrado
                    alert(xhr.responseJSON.error);
                }
            }
        });
        
        
    });

    // Escuchar el envío del formulario de registro de matrícula
    $('#form-registrar-matricula').submit(function(event) {
        // Aquí coloca tu lógica para enviar el formulario de registro de matrícula
        
        var alumnoidValue = $('#form-buscar-alumno').find('#alumnoid').val();
        console.log(alumnoidValue)
    });
});

    </script>
    
    <form id="form-registrar-matricula" name="form-registrar-matricula" action="{{route('matriculas.store')}}" method="post" enctype="multipart/form-data">
    @include('partials.formmatriculas',['btnText'=>'Registrar'])
    <script>
        // Obtener todos los elementos del formulario por su nombre
var formElements = document.forms["form-registrar-matricula"].elements;

// Iterar sobre los elementos y mostrar sus atributos
for (var i = 0; i < formElements.length; i++) {
    console.log("Nombre del elemento: " + formElements[i].name);
    console.log("Tipo del elemento: " + formElements[i].type);
    console.log("Valor del elemento: " + formElements[i].value);
    console.log("ID del elemento: " + formElements[i].id);
    // Puedes mostrar más atributos según sea necesario
}

    </script>
    </form>
    <div id="error-message" class="alert alert-danger" style="display: none;"></div>

@endsection
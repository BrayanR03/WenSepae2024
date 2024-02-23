@extends('layout')
@section('title','Registrar Matricula')
@section('content')
    <h1>REGISTRAR MATRICULA</h1>
    @include('partials.validations-errors')
    <form id="form-buscar-alumno" action="{{route('buscarAlumno')}}" method="GET">
        <input type="radio" name="tipo_busqueda" value="AlumnoDni" checked> Por DNI
        <input type="radio" name="tipo_busqueda" value="AlumnoApellidos"> Por Apellidos <br><br>
    
        <label for="dni_apellidos">DNI o Apellidos:</label>
        <input type="text" name="dni_apellidos" autofocus id="dni_apellidos">
    
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
            
            <td>
                <input type="hidden" name="alumnoid" id="alumnoid" value="{{old('alumnoid')}}">
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
                $('#AlumnoID').val(response.alumnoid);
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
        
    });
});

    </script>
    
    <form id="form-registrar-matricula" name="form-registrar-matricula" action="{{route('matriculas.store')}}" method="post" enctype="multipart/form-data">
    <table class="cursos-lista">
        <tr>
            <th>Curso ID</th>
            <th>Curso</th>
            <th>Fecha Inicio</th>
            <th>Fecha Fin</th>
            <th>Acciones</th>
            
        </tr>
            @if ($cursos)
                @foreach ($cursos as $cursos)
                    <tr>
                        <td>{{$cursos->CursoID}}</td>
                        <td>{{$cursos->CursoDescripcion}}</td>
                        <td hidden>{{$cursos->CursoHoraInicio}}</td>
                        <td hidden>{{$cursos->CursoHoraFin}}</td>
                        <td>{{$cursos->Frecuencia}}</td>
                        <td>{{$cursos->CursoFechaInicio}}</td>
                        <td>{{$cursos->CursoFechaFin}}</td>
                        <td><a class="agregar-curso"  href="#">+</a></td>
                    </tr>
                    
                @endforeach
            @else
                <p>No hay Datos</p>
            @endif
    </table>
        
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Agregar curso
            let idsCursos=[];
            document.querySelectorAll('.agregar-curso').forEach(function(enlace) {
                enlace.addEventListener('click', function(event) {
                    event.preventDefault(); // Prevenir el comportamiento predeterminado del enlace
                    
                    // Obtener la fila del curso seleccionado
                    var filaCurso = this.closest('tr');
        
                    // Obtener los valores de las columnas de la fila seleccionada
                    var cursoID = filaCurso.querySelector('td:nth-child(1)').innerText.trim(); // Suponiendo que el ID del curso está en la primera columna
                    var cursoDescripcion = filaCurso.querySelector('td:nth-child(2)').innerText.trim();
                    var cursoHoraInicio = filaCurso.querySelector('td:nth-child(3)').innerText.trim();
                    var cursoHoraFin = filaCurso.querySelector('td:nth-child(4)').innerText.trim();
                    var frecuencia = filaCurso.querySelector('td:nth-child(5)').innerText.trim();
                    var cursoFechaInicio = filaCurso.querySelector('td:nth-child(6)').innerText.trim();
                    var cursoFechaFin = filaCurso.querySelector('td:nth-child(7)').innerText.trim();
                    idsCursos.push(cursoID);
                      
                    console.log(idsCursos);
                    document.getElementById('ids_cursos').value = idsCursos.join(',');
                    // Crear una nueva fila en la segunda tabla con los detalles del curso seleccionado
                    var fila = document.createElement('tr');
                    fila.innerHTML = '<td>' + cursoID + '</td>' +
                                     '<td>' + cursoDescripcion + '</td>' +
                                     '<td>' + frecuencia + '</td>' +
                                     '<td>' + cursoHoraInicio + '</td>' +
                                     '<td>' + cursoHoraFin + '</td>' +
                                     '<td><a class="eliminar-curso" href="#">-</a></td>'; // Agregar enlace "-" para eliminar el curso
                    document.querySelector('#cursos-registrados-alumno tbody').appendChild(fila);
        
                    // Asociar evento de clic al enlace "-" recién agregado
                    fila.querySelector('.eliminar-curso').addEventListener('click', function(event) {
                        event.preventDefault(); // Prevenir el comportamiento predeterminado del enlace
                        let index=idsCursos.indexOf(cursoID);
                        if(index!==-1){
                            idsCursos.splice(index,1);
                        }
                        fila.remove(); // Eliminar la fila del curso de la segunda tabla
                        document.getElementById('ids_cursos').value = idsCursos.join(',');
                    });
                });
            });
        });
        </script>
        
        
    <h3>Cursos Registrados del Alumno(a)</h3>
    <table id="cursos-registrados-alumno">
        <thead>
            <th>Curso ID</th>
            <th>Descripcion</th>
            <th>Frecuencia</th>
            <th>Hora Inicio</th>
            <th>Hora Fin</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            
        </tbody>
    </table>
    <input type="text" name="ids_cursos" id="ids_cursos" value>
    @include('partials.formmatriculas',['btnText'=>'Registrar','fechita'=>date('Y-m-d')])
    </form>
    <div id="error-message" class="alert alert-danger" style="display: none;"></div>

@endsection
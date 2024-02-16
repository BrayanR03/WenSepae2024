<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <h1>Sistema Web Sepae 2024</h1>
    <table>
        <tr>
            <td><a href="/">INICIO</a></td>
            <td><a href="{{route('apoderados.index')}}">APODERADO</a></td>
            <td><a href="{{route('alumnos.index')}}">ALUMNOS</a></td>
            <td><a href="{{route('docentes.index')}}">DOCENTES</a></td>
            <td><a href="{{route('cursos.index')}}">CURSOS</a></td>
        </tr>
    </table>
</body>
</html>
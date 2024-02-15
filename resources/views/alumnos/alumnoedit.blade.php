@extends('layout')
@section('title','EDITAR')
@section('content')
    <h1>EDITAR INFORMACION ALUMNO</h1>
    @include('partials.validations-errors')
    <form action="{{route('alumnos.update',$alumnos)}}" method="post" enctype="multipart/form-data">
    @method('PATCH')
    @include('partials.formalumno',['btnText'=>'ACTUALIZAR'])
    </form>
@endsection
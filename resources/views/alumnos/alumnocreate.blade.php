@extends('layout')
@section('title','Registrar Alumno')
@section('content')
    <h1>REGISTRAR ALUMNO</h1>
    @include('partials.validations-errors')
    <form action="{{route('alumnos.store')}}" method="post">
    @include('partials.formalumno',['btnText'=>'Registrar'])
    </form>
@endsection
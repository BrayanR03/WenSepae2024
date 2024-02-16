@extends('layout')
@section('title','Registrar Curso')
@section('content')
    <h1>REGISTRAR CURSO</h1>
    @include('partials.validations-errors')
    <form action="{{route('cursos.store')}}" method="post" enctype="multipart/form-data">
    @include('partials.formcursos',['btnText'=>'Registrar'])
    </form>
@endsection
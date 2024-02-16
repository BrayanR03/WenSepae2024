@extends('layout')
@section('title','EDITAR')
@section('content')
    <h1>EDITAR CURSO</h1>
    @include('partials.validations-errors')
    <form action="{{route('cursos.update',$cursos)}}" method="post" enctype="multipart/form-data">
        @method('PATCH')
        @include('partials.formcursos',['btnText'=>'Actualizar'])
    </form>
@endsection
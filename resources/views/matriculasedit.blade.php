@extends('layout')
@section('title','Editar Matricula')
@section('content')
    <h1>EDITAR MATRICULA</h1>
    @include('partials.validations-errors')
    <form action="{{route('matriculas.update',$matriculas)}}" method="post" enctype="multipart/form-data">
    @method('PATCH')
    @include('partials.formmatriculas',['btnText'=>'Actualizar'])
    </form>
@endsection
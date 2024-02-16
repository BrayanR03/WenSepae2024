@extends('layout')
@section('title','Registrar Matricula')
@section('content')
    <h1>REGISTRAR MATRICULA</h1>
    @include('partials.validations-errors')
    <form action="{{route('matriculas.store')}}" method="post" enctype="multipart/form-data">
    @include('partials.formmatriculas',['btnText'=>'Registrar'])
    </form>
@endsection
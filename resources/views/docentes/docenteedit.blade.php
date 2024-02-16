@extends('layout')
@section('title','Editar')
@section('content')
    <h1>EDITAR DATOS</h1>
    @include('partials.validations-errors')
    <form action="{{route('docentes.update',$docentes)}}" method="post" enctype="multipart/form-data">
    @method('PATCH')
    @include('partials.formdocente',['btnText'=>'Actualizar'])
    </form>
@endsection
@extends('layout')
@section('title','EditarAsistencias')
@section('content')
    <h1>EDITAR ASISTENCIAS</h1>
    @include('partials.validations-errors')
    <form action="{{route('asistencias.update',$asistencias)}}" method="post" enctype="multipart/form-data">
    @method('PATCH')
    @include('partials.formasistencias',['btnText'=>'Actualizar'])
    </form>
@endsection
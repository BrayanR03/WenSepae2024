@extends('layout')
@section('title','Asistencias')
@section('content')
    <h1>REGISTRAR ASISTENCIAS</h1>
    @include('partials.validations-errors')
    <form action="{{route('asistencias.store')}}" method="post" enctype="multipart/form-data">
    @include('partials.formasistencias',['btnText'=>'Registrar'])
    </form>
@endsection
@extends('layout')
@section('title','Registrar')
@section('content')
    <h1>REGISTRAR DOCENTE</h1>
    @include('partials.validations-errors')
    <form action="{{route('docentes.store')}}" method="post" enctype="multipart/form-data">
    @include('partials.formdocente',['btnText'=>'Registrar'])
    </form>
@endsection
@extends('layout')
@section('title','Registrar')
@section('content')
    <h1>Registrar Apoderado</h1>
    @include('partials.validations-errors')
    <form action="{{route('apoderados.store')}}" method="post" enctype="multipart/form-data">
    @include('partials.form',['btnText'=>'Registrar'])
    </form>
@endsection
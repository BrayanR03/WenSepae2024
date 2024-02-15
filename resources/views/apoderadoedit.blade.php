@extends('layout')
@section('title','Editar')
@section('content')
@include('partials.validations-errors')
<form action="{{route('apoderados.update',$apoderados)}}" method="post" >
@method('PATCH')
@include('partials.form',['btnText'=>'Actualizar'])
</form>
@endsection
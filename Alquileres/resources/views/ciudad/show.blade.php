@extends('layouts.plantilla')

@section('content')

<h2>Ciudades</h2>
<div>
    <lavel>Identificación</lavel>
    <input type="text" name="id" value="{{$ciudad->id}}">
</div>
<div>
    <lavel>Nombre</lavel>
    <input type="text" name="nombre" value="{{$ciudad->nombre}}">
</div>
<div>
    <a href="{{route('ciudad.index')}}">Volver</a>
</div>

@endsection
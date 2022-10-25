@extends('layouts.plantilla')

@section('name', 'AlquileresRG')

@section('content')
<h1>Listado de ciudades</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Identificación</th>
        <th scope="col">Nombre</th>
      </tr>
    </thead>
    <tbody class="table-group-divider">
         @foreach ($ciudades as $dato)
      <tr>
        <td>{{$dato->id}}</td>
        <td>{{$dato->nombre}}</td>
        <td><a href="{{route('ciudad.show', $dato)}}">Ver detalle</a></td>
        <td><a href="{{route('ciudad.edit', $dato)}}">Editar</a></td>
        @endforeach
      </tr> 
    </tbody>
  </table>
  <a href="{{route('ciudad.create')}}">Agregar ciudad</a>
@endsection
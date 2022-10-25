@extends('layouts.plantilla')

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
        {{-- @foreach ($ciudades as $dato)
            
        @endforeach
      <tr>
        <td>{{$ciudad->id}}</td>
        <td>{{$ciudad->nombre}}</td>
        <td><a href="/">Ver detalle</a></td>
      </tr> --}}
    </tbody>
  </table>
@endsection
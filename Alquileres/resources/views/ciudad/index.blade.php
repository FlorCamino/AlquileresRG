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
        <td><a href="{{route('ciudad.show', $dato)}}"><button type="submit" class="btn btn-primary btn-sm">Ver detalle</button></a></td>
        <td><a href="{{route('ciudad.edit', $dato)}}"><button type="submit" class="btn btn-success btn-sm">Editar</button></a></td>
        <td><form method="post" action="{{route('ciudad.destroy',$dato->id)}}">
          @method('delete')
          @csrf
          <button type="submit" class="btn btn-danger btn-sm">Delete</button>
      </form></td>
        @endforeach
      </tr> 
    </tbody>
  </table>
  <a href="{{route('ciudad.create')}}"><button type="submit" class="btn btn-warning btn-sm">Agregar ciudad</button></a>
@endsection
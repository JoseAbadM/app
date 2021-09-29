@extends('plantilla')

@section('seccion')
<div class="container">
<a href="/matriculas" class="btn btn-primary">Volver</a>
    <a href="carrera/carrera_create" class="btn btn-primary">Agregar</a>
    

<h1>Carrera</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Grado</th>
      <th scope="col">Menciones</th>
      

    </tr>
  </thead>
  <tbody>
    @foreach($carrera as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->nombre}}</td>
      <td>{{$item->nombregrado}}</td>
      <td><a href="{{URL::action('MencionController@index',$item->id)}}"><button class="btn btn-info">Menciones</button></a></td>
      
    </tr>
    @endforeach
        
  </tbody>
</table>
</div>
@endsection
@extends('plantilla')

@section('seccion')
<div class="container">
<a href="/matriculas" class="btn btn-primary">Volver</a>
    <a href="version/version_create" class="btn btn-primary">Agregar</a>
    

<h1>Versiones</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Nombre</th>
      
      

    </tr>
  </thead>
  <tbody>
    @foreach($version as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->nombre}}</td>

      
    </tr>
    @endforeach
        
  </tbody>
</table>
</div>
@endsection
@extends('plantilla')

@section('seccion')
<div class="container">
<a href="/matriculas" class="btn btn-primary">Volver</a>
    <a href="/persona/persona_create" class="btn btn-primary">Agregar</a>
    

<h1>Personas</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Rut</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      

    </tr>
  </thead>
  <tbody>
    @foreach($persona as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->rut}}</td>
      <td>{{$item->nombre}}</td>
      <td>{{$item->apellido}}</td>
      
    </tr>
    @endforeach
        
  </tbody>
</table>

{{ $persona->links()}}
</div>
@endsection
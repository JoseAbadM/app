@extends('plantilla')

@section('seccion')
<div class="container">
    <a href="/persona/persona_index" class="btn btn-primary">Persona</a>
    <a href="/carrera/carrera_index" class="btn btn-primary">Carrera</a>
    <a href="/matriculas_create" class="btn btn-primary">Matricular</a>

<h1>Matriculas</h1>

@if ($mensaje !== '')
  <div class="alert alert-success">
   {{ $mensaje}}
  </div>

@endif

<table class="table">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Rut</th>
      <th scope="col">Carrera</th>
      <th scope="col">Mencion</th>
      <th scope="col">Version</th>
    </tr>
  </thead>
  <tbody>
    @foreach($matriculas as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      
      
      <td>{{$item->rut}}</td>
     <td>{{$item->nombrecarrera}}</td>
     <td>{{$item->nombremencion}}</td>
      <td>{{$item->nombreversion}}</td>
    </tr>
    @endforeach
        
  </tbody>
</table>


</div>
@endsection
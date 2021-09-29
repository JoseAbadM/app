@extends('plantilla')

@section('seccion')
<div class="container">
<a href="/matriculas" class="btn btn-primary">Volver</a>
    <a href="mencion/mencion_create" class="btn btn-primary">Agregar</a>
    

<h1>Menciones</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Versiones</th>
      

    </tr>
  </thead>
  <tbody>
    @foreach($mencion as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->nombre}}</td>
      <td><a href="{{URL::action('VersionController@index',$item->id)}}"><button class="btn btn-info">Versiones</button></a></td>
      
    </tr>
    @endforeach
        
  </tbody>
</table>
</div>
@endsection
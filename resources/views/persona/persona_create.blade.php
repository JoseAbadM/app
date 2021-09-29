@extends('plantilla')

@section('seccion')

<a href="/persona/persona_index" class="btn btn-primary">Volver</a>

<h1>Persona</h1>
@if ($mensaje !== '')
  <div class="alert alert-success">
   {{ $mensaje}}
  </div>

@endif

<form method="POST" action="/persona/persona_create">
<input type="hidden" name="_token" value="{!! csrf_token() !!}">




    <div class="form-group row">
    <label  class="col-md-4 col-form-label text-md-right">Rut</label>

    <div class="col-md-4">
            	
            	<input type="text" id="rut" name="rut" class="form-control"  value="{{old('num_documento')}}" placeholder="Rut...">
            </div>
	</div>

	<div class="form-group row">
    <label  class="col-md-4 col-form-label text-md-right">Nombre</label>

    <div class="col-md-4">
            	
            	<input type="text" name="nombre" id="nombre" class="form-control" required value="{{old('nombre')}}" placeholder="Nombre...">
                </div>
	</div>

    <div class="form-group row">
    <label  class="col-md-4 col-form-label text-md-right">Apellido</label>

    <div class="col-md-4">
            	
            	<input type="text" name="apellido" id="apellido" class="form-control" required value="{{old('apellido')}}" placeholder="Apellido...">
            </div>
	</div>
    <button class="btn btn-primary" type="submit">Agregar</button>
</form>	
@endsection
@extends('plantilla')

@section('seccion')

<a href="/matriculas" class="btn btn-primary">Volver</a>

<h1>Matricular</h1>

Debe completar los 5 pasos

<form method="POST" action="/matriculas">
<input type="hidden" name="_token" value="{!! csrf_token() !!}">

<div class="form-group row">
    <label  class="col-md-4 col-form-label text-md-right">Rut</label>

<div class="col-md-4">
     <input type="text" name="rut" id="rut" placeholder="Rut" class="form-control mb-2">
</div>
</div>

<div class="form-group row">
    <label  class="col-md-4 col-form-label text-md-right">Carrera</label>

<div class="col-md-4">
    <select name="idcarrera" id="idcarreras" class="form-control selectpicker" data-live-search="true">
                <option>Elegir</option>
            	@foreach($carreras as $carrera)
            		<option value="{{$carrera->id}}">{{$carrera->nombre}}</option>
            	@endforeach
            	</select>
    </div>
</div>  

<div class="form-group row">
    <label  class="col-md-4 col-form-label text-md-right">Mencion</label>

<div class="col-md-4">
<select name="idmencion" id="_mencion" class="form-control selectpicker" data-live-search="true">
<option>Seleccione una Mención</option></select>

</div>
</div> 

<div class="form-group row">
    <label  class="col-md-4 col-form-label text-md-right">Version</label>
    <div class="col-md-4">
        <select name="idversion" id="_version" class="form-control selectpicker" data-live-search="true">
        <option>Seleccione una Versión</option>
        </select>

        </div>
</div>


<script>
    const csrfToken = document.head.querySelector("[name~=csrf-token][content]").content;
    document.getElementById('idcarreras').addEventListener('change',(e)=>{
        fetch('subcategorias',{
            method : 'POST',
            body: JSON.stringify({texto : e.target.value}),
            headers:{
                'Content-Type': 'application/json',
                "X-CSRF-Token": csrfToken
            }
        }).then(response =>{
            return response.json()
        }).then( data =>{
            var opciones ="<option value=''>Elegir</option>";
            for (let i in data.lista) {
               opciones+= '<option value="'+data.lista[i].id+'">'+data.lista[i].nombre+'</option>';
            }
            document.getElementById("_mencion").innerHTML = opciones;
        }).catch(error =>console.error(error));
    })

    document.getElementById('_mencion').addEventListener('change',(e)=>{
        fetch('empresas',{
            method : 'POST',
            body: JSON.stringify({texto : e.target.value}),
            headers:{
                'Content-Type': 'application/json',
                "X-CSRF-Token": csrfToken
            }
        }).then(response =>{
            return response.json()
        }).then( data =>{
            var opciones ="<option value=''>Elegir</option>";
            for (let i in data.lista) {
               opciones+= '<option value="'+data.lista[i].id+'">'+data.lista[i].nombre+'</option>';
            }
            document.getElementById("_version").innerHTML = opciones;
        }).catch(error =>console.error(error));
    })

</script>  


    <button class="btn btn-primary" type="submit">Agregar</button>
</form>
  
@endsection


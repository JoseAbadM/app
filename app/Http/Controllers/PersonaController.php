<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Session;
use App\Http\Request\PersonaFormRequests;
use Illuminate\Support\Facades\Redirect;
use DB;
use Carbon\Carbon;
use Response;
use Illuminate\Support\Collection;


class PersonaController extends Controller
{
    public function index()
    {
        $persona = App\Persona::paginate(10);

        //echo $persona;
        return view('persona/persona_index',["persona"=>$persona, "mensaje"=>'']);
}

    public function create()
    {
        return view('persona/persona_create',["mensaje"=>'']);

    }

    public function store(PersonaFormRequests $request)
    {
        //echo $request;

        $matriculaNueva = new App\Persona;
        $matriculaNueva -> nombre = $request->nombre;
        $matriculaNueva -> apellido= $request->apellido;
        $matriculaNueva -> rut = $request->rut;

        $matriculaNueva->save();
        //return Redirect::to('/matriculas')->with('mensaje','Persona Agregada');
        //->with('mensaje', 'Persona Agregada');
        $mensaje='Persona Agregada';
        return view('persona/persona_create',["mensaje"=>$mensaje]);
    }

}
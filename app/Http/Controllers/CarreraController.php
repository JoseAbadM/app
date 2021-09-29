<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
//use App\Http\Request\CarreraFormRequests;
use Illuminate\Support\Facades\Redirect;
use DB;
use Carbon\Carbon;
use Response;
use Illuminate\Support\Collection;


class CarreraController extends Controller
{
    public function index()
    {
        //$carrera = App\Carrera::all();

        $lista= DB::select("SELECT carrera.id, carrera.nombre, 
        grados.nombre as nombregrado
       FROM carrera, grados
       WHERE carrera.idgrado = grados.id
        ORDER BY  carrera.id");

        
         return view('carrera/carrera_index',["carrera"=>$lista, "mensaje"=>'']);
}

public function create()
{
    
}

public function store()
{
   
}

}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Log;

use App\Http\Request\MatriculaFormRequests;
use Illuminate\Support\Facades\Redirect;
use DB;
use Carbon\Carbon;
use Response;
use Illuminate\Support\Collection;


class MatriculaController extends Controller
{
    public function index()
    {
        //$matriculas = App\Matricula::paginate(10);

       
       $lista= DB::select("SELECT m.id, m.rut, c.nombre as nombrecarrera, mm.nombre
       as nombremencion, v.nombre as nombreversion
       FROM matriculas m, carrera c, menciones mm, versiones v
       WHERE m.idcarrera = c.id
       AND m.idmencion= mm.id
       AND m.idversion = v.id
       ORDER BY  m.id");




        //echo $lista;
        //Log::info("Lista:".$lista);
        return view('matriculas',["matriculas"=>$lista, "mensaje"=>'']);
    }

    public function create()
    {
        $carreras=DB::table('carrera')->get();
       // $menciones=DB::table('menciones')->get();
       //$versiones=DB::table('versiones')->get();
        
        $menciones=[];
        $versiones=[];
        return view("matriculas_create",["carreras"=>$carreras, "menciones"=>$menciones, "versiones"=>$versiones, "mensaje"=>'']);

    }

    public function store(MatriculaFormRequests $request)
    {
        //echo $request;

        $matriculaNueva = new App\Matricula;
        $matriculaNueva -> idmencion = $request->idmencion;
        $matriculaNueva -> idversion = $request->idversion;
        $matriculaNueva -> idcarrera = $request->idcarrera;
        $matriculaNueva -> rut = $request->rut;

        $res = DB::select("SELECT rut  FROM personas 
        WHERE personas.rut = '".$request->rut."' limit 1");

 
      if(empty($res)) {
        $mensaje='Persona no Existe';
      } else {
          
          $matriculaNueva->save();
        $mensaje='Alumno Matriculado';
             }


        

             $lista= DB::select("SELECT m.id, m.rut, c.nombre as nombrecarrera, mm.nombre
             as nombremencion, v.nombre as nombreversion
             FROM matriculas m, carrera c, menciones mm, versiones v
             WHERE m.idcarrera = c.id
             AND m.idmencion= mm.id
             AND m.idversion = v.id
             ORDER BY  m.id");

        return view('matriculas',["matriculas"=>$lista, "mensaje"=>$mensaje]);
    }


    public function subcategorias(Request $request){
        if(isset($request->texto)){
            $subcategorias = DB::table('menciones')->whereidcarrera($request->texto)->get();
            return response()->json(
                [
                    'lista' => $subcategorias,
                    'success' => true
                ]
                );
        }else{
            return response()->json(
                [
                    'success' => false
                ]
                );

        }

    }
    
    public function empresas(Request $request){
        if(isset($request->texto)){
            $empresas = DB::table('versiones')->whereidmencion($request->texto)->get();
            return response()->json(
                [
                    'lista' => $empresas,
                    'success' => true
                ]
                );
        }else{
            return response()->json(
                [
                    'success' => false
                ]
                );

        }

    }

   



}

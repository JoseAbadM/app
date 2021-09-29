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


class MencionController extends Controller
{
    public function index($id)
    {
        $mencion = DB::table('menciones')->where('idcarrera','=',$id)->get();

        //echo $mencion;
      return view('mencion/mencion_index',["mencion"=>$mencion, "mensaje"=>'']);
}



public function create()
{
    
}

public function store()
{
   
}

}
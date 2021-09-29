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


class VersionController extends Controller
{
    public function index($id)
    {
        $version = DB::table('versiones')->where('idmencion','=',$id)->get();

        //echo $version;
      return view('version/version_index',["version"=>$version, "mensaje"=>'']);
}



public function create()
{
    
}

public function store()
{
   
}

}
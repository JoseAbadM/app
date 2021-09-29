<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $table ='carrera' ;

    protected $primaryKey = 'id';

    public $fillable=['nombre','idgrado'];

public function menciones(){
    return $this->hasMany("App\Menciones");
}


    public $timestamps = false;

    public $incrementing= false;
}
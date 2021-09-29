<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menciones extends Model
{
    protected $table ='menciones' ;

    protected $primaryKey = 'id';

    public $fillable=['nombre','idcarrera'];

    public function carrera(){
        return $this->belongsTo("App\Carrera");
    }
    public function menciones(){
        return $this->hasMany("App\Vesiones");
    }

    public $timestamps = false;

    public $incrementing= false;
}
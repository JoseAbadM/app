<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Versiones extends Model
{
    protected $table ='versiones' ;

    protected $primaryKey = 'id';

    public $fillable=['nombre','idmencion'];

    public function menciones(){
        return $this->belongsTo("App\Menciones");
    } 

    public $timestamps = false;

    public $incrementing= false;
}
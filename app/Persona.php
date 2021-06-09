<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table="personas";

    protected $fillable=[
        "id",
        "foto",
        "nombre",
        "apellido",
        "edad",
        "email",
        "altura",
        "peso",
        "imc",
        "plan_id"
    ];
    public function plan(){
        return $this->belongsTo('App\Plan');
    }

}

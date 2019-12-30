<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Materia extends Model
{
    function grupos(){
        return $this->hasMany('App\Grupo');
    }
}

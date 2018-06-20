<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    public function horarios()
    {
        return $this->hasMany('App\Horario');
    }
}

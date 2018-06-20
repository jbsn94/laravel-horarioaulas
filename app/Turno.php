<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    public function horarios()
    {
        return $this->hasMany('App\Horario');
    }
}

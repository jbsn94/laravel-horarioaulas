<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    public function curso()
    {
        return $this->belongsTo('App\Curso');
    }

    public function horarios()
    {
        return $this->hasMany('App\Horario');
    }
}

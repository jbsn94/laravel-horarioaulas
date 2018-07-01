<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    public function centro()
    {
        return $this->belongsTo('App\Centro');
    }

    public function disciplinas()
    {
        return $this->hasMany('App\Disciplina');
    }
}

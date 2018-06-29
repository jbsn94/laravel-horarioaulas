<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    public function disciplina()
    {
        return $this->belongsTo('App\Disciplina');
    }

    public function periodo()
    {
        return $this->belongsTo('App\Periodo');
    }

    public function dia()
    {
        return $this->belongsTo('App\Dia');
    }
    
    public function turno()
    {
        return $this->belongsTo('App\Turno');
    }
}

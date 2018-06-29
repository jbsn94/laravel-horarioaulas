<?php

namespace App\Http\Controllers;
use App\Horario as Model;
use App\Periodo as Periodo;
use Illuminate\Http\Request;

class HorariosController extends Controller
{
    public function __construct(Model $model, Periodo $periodo)
    {
        $this->model = $model;
        $this->periodo = $periodo;
    }

    public function index($centro,$curso)
    {
        return view('horarios.index')
        ->with('dados',$this->model->with(['periodo','dia','turno','disciplina' => function($q) use($curso) {
            $q->where('curso_id', '=', $curso);
        }])->get()->groupBy('periodo_id'))
        ->with('periodos', $this->periodo->all());
    }
}

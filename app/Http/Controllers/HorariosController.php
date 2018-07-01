<?php

namespace App\Http\Controllers;
use App\Horario as Model;
use App\Periodo as Periodo;
use App\Usuario as aluno;
use Illuminate\Http\Request;

class HorariosController extends Controller
{
    public function __construct(Model $model, Periodo $periodo, aluno $aluno)
    {
        $this->model = $model;
        $this->periodo = $periodo;
        $this->aluno = $aluno;
    }

    public function index($centro,$curso)
    {
        return view('horarios.index')
        ->with('dados',$this->model->with(['periodo','dia','turno','disciplina' => function($q) use($curso) {
            $q->where('curso_id', '=', $curso);
        }])->get()->groupBy('periodo_id'))
        ->with('periodos', $this->periodo->all());
    }

    public function aluno(){
        $res = app('request')->all();
        if($res['token']){
            $aluno = $this->aluno->find($res['id_aluno']);
            $token = md5(json_encode((object)[
                'id' => $aluno->id,
                'periodo_id' => $aluno->id_periodo,
                'curso_id' => $aluno->id_curso,
                'date' => date("Y-m-d")
            ]));
            if($token == $res['token']){
                return response()->json($this->model->with(['periodo','dia','turno','disciplina' => function($q) use($aluno) {
                    $q->where('curso_id', '=', $aluno->id_curso);
                }])->where('periodo_id','=',$aluno->id_periodo)->get());
            }
            return response()->json([
                'error' => 'Token inválido'
            ]);

        }
    }
}

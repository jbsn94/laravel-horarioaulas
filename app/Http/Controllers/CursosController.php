<?php

namespace App\Http\Controllers;
use App\Curso as Model;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function index($id)
    {
        return view('cursos.index')->with('dados',$this->model->where('centro_id','=',$id)->get());
    }
}

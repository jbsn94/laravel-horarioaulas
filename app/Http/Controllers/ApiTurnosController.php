<?php

namespace App\Http\Controllers;
use App\Turno as Model;
use Illuminate\Http\Request;

class ApiTurnosController extends Controller
{
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * @SWG\Get(
     *      path="/turnos",
     *      tags={"Turnos"},
     *      summary="Pegar a lista de turnos",
     *      description="Retorna a lista de turnos",
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation"
     *       ),
     *     )
     *
     * Returns lista de turnos
     */
    public function index()
    {
        return response()->json($this->model->all());
    }

    /**
     * @SWG\Post(
     *     path="/turnos",
     *     tags={"Turnos"},
     *     summary="Cadastrar um novo turno",
     *     @SWG\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *  @SWG\Parameter(
     *      name="body",
     *      in="body",
     *      description="Parâmetros da requisição",
     *      @SWG\Schema(
     *          @SWG\Property(property="descricao", type="string", example="Manhã"),
     *      ),
     *  ),
     * )
     */
    public function store(Request $request)
    {
        $turno = new $this->model;
        $turno->descricao = app('request')->all()['descricao'];
        $turno->save();
        return response()->json($turno);
    }

    /**
     * @SWG\Get(
     *      path="/turnos/{id}",
     *      tags={"Turnos"},
     *      summary="Visualizar um turno",
     *      description="Retorna o turno pelo ID",
     *      @SWG\Parameter(
     *          name="id",
     *          description="ID do turno",
     *          required=true,
     *          type="integer",
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation"
     *       ),
     *     )
     *
     * Returns lista de turnos
     */
    public function show($id)
    {
        return response()->json($this->model->find($id));
    }

    /**
     * @SWG\Put(
     *     path="/turnos/{id}",
     *     tags={"Turnos"},
     *     summary="Atualizar um turno existente",
     *     @SWG\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *      @SWG\Parameter(
     *          name="id",
     *          description="ID do turno",
     *          required=true,
     *          type="integer",
     *          in="path"
     *      ),
     *  @SWG\Parameter(
     *      name="body",
     *      in="body",
     *      description="Parâmetros da requisição",
     *      @SWG\Schema(
     *          @SWG\Property(property="descricao", type="string", example="Manhã"),
     *      ),
     *  ),
     * )
     */
    public function update(Request $request, $id)
    {
        $turno = $this->model->find($id);
        $turno->descricao = app('request')->all()['descricao'];
        $turno->save();
        return response()->json($turno);
    }

    /**
     * @SWG\Delete(
     *      path="/turnos/{id}",
     *      tags={"Turnos"},
     *      summary="Remove um turno",
     *      description="Deleta o turno pelo ID",
     *      @SWG\Parameter(
     *          name="id",
     *          description="ID do turno",
     *          required=true,
     *          type="integer",
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation"
     *       ),
     *     )
     *
     * Returns Void
     */
    public function destroy($id)
    {
        $this->model->destroy($id);
        return response()->json('Item deletado com sucesso');
    }
}

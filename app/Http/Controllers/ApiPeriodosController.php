<?php

namespace App\Http\Controllers;
use App\Periodo as Model;
use Illuminate\Http\Request;

class ApiperiodosController extends Controller
{
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * @SWG\Get(
     *      path="/periodos",
     *      tags={"Periodos"},
     *      summary="Pegar a lista de periodos",
     *      description="Retorna a lista de periodos",
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation"
     *       ),
     *     )
     *
     * Returns lista de periodos
     */
    public function index()
    {
        return response()->json($this->model->all());
    }

    /**
     * @SWG\Post(
     *     path="/periodos",
     *     tags={"Periodos"},
     *     summary="Cadastrar um novo periodo",
     *     @SWG\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *  @SWG\Parameter(
     *      name="body",
     *      in="body",
     *      description="Parâmetros da requisição",
     *      @SWG\Schema(
     *          @SWG\Property(property="descricao", type="string", example="12º"),
     *      ),
     *  ),
     * )
     */
    public function store(Request $request)
    {
        $periodo = new $this->model;
        $periodo->descricao = app('request')->all()['descricao'];
        $periodo->save();
        return response()->json($periodo);
    }

    /**
     * @SWG\Get(
     *      path="/periodos/{id}",
     *      tags={"Periodos"},
     *      summary="Visualizar um periodo",
     *      description="Retorna o periodo pelo ID",
     *      @SWG\Parameter(
     *          name="id",
     *          description="ID do periodo",
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
     * Returns lista de periodos
     */
    public function show($id)
    {
        return response()->json($this->model->find($id));
    }

    /**
     * @SWG\Put(
     *     path="/periodos/{id}",
     *     tags={"Periodos"},
     *     summary="Atualizar um periodo existente",
     *     @SWG\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *      @SWG\Parameter(
     *          name="id",
     *          description="ID do periodo",
     *          required=true,
     *          type="integer",
     *          in="path"
     *      ),
     *  @SWG\Parameter(
     *      name="body",
     *      in="body",
     *      description="Parâmetros da requisição",
     *      @SWG\Schema(
     *          @SWG\Property(property="descricao", type="string", example="12º"),
     *      ),
     *  ),
     * )
     */
    public function update(Request $request, $id)
    {
        $periodo = $this->model->find($id);
        $periodo->descricao = app('request')->all()['descricao'];
        $periodo->save();
        return response()->json($periodo);
    }

    /**
     * @SWG\Delete(
     *      path="/periodos/{id}",
     *      tags={"Periodos"},
     *      summary="Remove um periodo",
     *      description="Deleta o periodo pelo ID",
     *      @SWG\Parameter(
     *          name="id",
     *          description="ID do periodo",
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

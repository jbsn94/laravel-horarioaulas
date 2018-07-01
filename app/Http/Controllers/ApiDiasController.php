<?php

namespace App\Http\Controllers;
use App\Dia as Model;
use Illuminate\Http\Request;

class ApiDiasController extends Controller
{
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * @SWG\Get(
     *      path="/dias",
     *      tags={"Dias"},
     *      summary="Pegar a lista de dias",
     *      description="Retorna a lista de dias",
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation"
     *       ),
     *     )
     *
     * Returns lista de dias
     */
    public function index()
    {
        return response()->json($this->model->all());
    }

    /**
     * @SWG\Post(
     *     path="/dias",
     *     tags={"Dias"},
     *     summary="Cadastrar um novo dia",
     *     @SWG\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *  @SWG\Parameter(
     *      name="body",
     *      in="body",
     *      description="Parâmetros da requisição",
     *      @SWG\Schema(
     *          @SWG\Property(property="descricao", type="string", example="Sábado"),
     *      ),
     *  ),
     * )
     */
    public function store(Request $request)
    {
        $dia = new $this->model;
        $dia->descricao = app('request')->all()['descricao'];
        $dia->save();
        return response()->json($dia);
    }

    /**
     * @SWG\Get(
     *      path="/dias/{id}",
     *      tags={"Dias"},
     *      summary="Visualizar um dia",
     *      description="Retorna o dia pelo ID",
     *      @SWG\Parameter(
     *          name="id",
     *          description="ID do dia",
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
     * Returns lista de dias
     */
    public function show($id)
    {
        return response()->json($this->model->find($id));
    }

    /**
     * @SWG\Put(
     *     path="/dias/{id}",
     *     tags={"Dias"},
     *     summary="Atualizar um dia existente",
     *     @SWG\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *      @SWG\Parameter(
     *          name="id",
     *          description="ID do dia",
     *          required=true,
     *          type="integer",
     *          in="path"
     *      ),
     *  @SWG\Parameter(
     *      name="body",
     *      in="body",
     *      description="Parâmetros da requisição",
     *      @SWG\Schema(
     *          @SWG\Property(property="descricao", type="string", example="Sábado"),
     *      ),
     *  ),
     * )
     */
    public function update(Request $request, $id)
    {
        $dia = $this->model->find($id);
        $dia->descricao = app('request')->all()['descricao'];
        $dia->save();
        return response()->json($dia);
    }

    /**
     * @SWG\Delete(
     *      path="/dias/{id}",
     *      tags={"Dias"},
     *      summary="Remove um dia",
     *      description="Deleta o dia pelo ID",
     *      @SWG\Parameter(
     *          name="id",
     *          description="ID do dia",
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

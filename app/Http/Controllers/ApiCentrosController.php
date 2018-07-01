<?php

namespace App\Http\Controllers;
use App\Centro as Model;
use Illuminate\Http\Request;

class ApiCentrosController extends Controller
{
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * @SWG\Get(
     *      path="/centros",
     *      tags={"Centros"},
     *      summary="Pegar a lista de centros",
     *      description="Retorna a lista de centros",
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation"
     *       ),
     *     )
     *
     * Returns lista de centros
     */
    public function index()
    {
        return response()->json($this->model->all());
    }

    /**
     * @SWG\Post(
     *     path="/centros",
     *     tags={"Centros"},
     *     summary="Cadastrar um novo centro",
     *     @SWG\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *  @SWG\Parameter(
     *      name="body",
     *      in="body",
     *      description="Parâmetros da requisição",
     *      @SWG\Schema(
     *          @SWG\Property(property="descricao", type="string", example="Centro de Informática"),
     *          @SWG\Property(property="sigla", type="string", example="CIN"),
     *      ),
     *  ),
     * )
     */
    public function store(Request $request)
    {
        $centro = new $this->model;
        $centro->descricao = app('request')->all()['descricao'];
        $centro->sigla = app('request')->all()['sigla'];
        $centro->save();
        return response()->json($centro);
    }

    /**
     * @SWG\Get(
     *      path="/centros/{id}",
     *      tags={"Centros"},
     *      summary="Visualizar um centro",
     *      description="Retorna o centro pelo ID",
     *      @SWG\Parameter(
     *          name="id",
     *          description="ID do centro",
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
     * Returns lista de centros
     */
    public function show($id)
    {
        return response()->json($this->model->find($id));
    }

    /**
     * @SWG\Put(
     *     path="/centros/{id}",
     *     tags={"Centros"},
     *     summary="Atualizar um centro existente",
     *     @SWG\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *      @SWG\Parameter(
     *          name="id",
     *          description="ID do centro",
     *          required=true,
     *          type="integer",
     *          in="path"
     *      ),
     *  @SWG\Parameter(
     *      name="body",
     *      in="body",
     *      description="Parâmetros da requisição",
     *      @SWG\Schema(
     *          @SWG\Property(property="descricao", type="string", example="Centro de Informática"),
     *          @SWG\Property(property="sigla", type="string", example="CIN"),
     *      ),
     *  ),
     * )
     */
    public function update(Request $request, $id)
    {
        $centro = $this->model->find($id);
        $centro->descricao = app('request')->all()['descricao'];
        $centro->sigla = app('request')->all()['sigla'];
        $centro->save();
        return response()->json($centro);
    }

    /**
     * @SWG\Delete(
     *      path="/centros/{id}",
     *      tags={"Centros"},
     *      summary="Remover um centro",
     *      description="Deleta o centro pelo ID",
     *      @SWG\Parameter(
     *          name="id",
     *          description="ID do centro",
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

<?php

namespace App\Http\Controllers;
use App\Curso as Model;
use Illuminate\Http\Request;

class ApiCursosController extends Controller
{
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * @SWG\Get(
     *      path="/centros/{centro}/cursos",
     *      tags={"Cursos"},
     *      summary="Pegar a lista de cursos",
     *      description="Retorna a lista de cursos de um centro",
     *      @SWG\Parameter(
     *          name="centro",
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
     * Returns lista de cursos
     */
    public function index()
    {
        return response()->json($this->model->where('centro_id','=',app('request')->centro)->get());
    }

    /**
     * @SWG\Post(
     *     path="/centros/{centro}/cursos",
     *     tags={"Cursos"},
     *     summary="Cadastrar um novo curso",
     *     @SWG\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *      @SWG\Parameter(
     *          name="centro",
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
     *          @SWG\Property(property="descricao", type="string", example="Sistemas de Informação"),
     *      ),
     *  ),
     * )
     */
    public function store(Request $request)
    {
        $curso = new $this->model;
        $curso->descricao = app('request')->all()['descricao'];
        $curso->centro_id = app('request')->centro;
        $curso->save();
        return response()->json($curso);
    }

    /**
     * @SWG\Get(
     *      path="/centros/{centro}/cursos/{id}",
     *      tags={"Cursos"},
     *      summary="Visualizar um curso do centro",
     *      description="Retorna o curso pelo ID",
     *      @SWG\Parameter(
     *          name="centro",
     *          description="ID do centro",
     *          required=true,
     *          type="integer",
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="id",
     *          description="ID do curso",
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
    public function show($centro,$id)
    {
        return response()->json($this->model->find($id));
    }

    /**
     * @SWG\Put(
     *     path="/centros/{centro}/cursos/{id}",
     *     tags={"Cursos"},
     *     summary="Atualizar um curso existente",
     *     @SWG\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *      @SWG\Parameter(
     *          name="centro",
     *          description="ID do centro",
     *          required=true,
     *          type="integer",
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="id",
     *          description="ID do curso",
     *          required=true,
     *          type="integer",
     *          in="path"
     *      ),
     *  @SWG\Parameter(
     *      name="body",
     *      in="body",
     *      description="Parâmetros da requisição",
     *      @SWG\Schema(
     *          @SWG\Property(property="descricao", type="string", example="Sistemas de Informação"),
     *      ),
     *  ),
     * )
     */
    public function update(Request $request, $id)
    {
        $curso = $this->model->find($id);
        $curso->descricao = app('request')->all()['descricao'];
        $curso->centro_id = app('request')->centro;
        $curso->save();
        return response()->json($curso);
    }

    /**
     * @SWG\Delete(
     *      path="/centros/{centro}/cursos/{id}",
     *      tags={"Cursos"},
     *      summary="Remover um curso",
     *      description="Deleta o curso pelo ID",
     *      @SWG\Parameter(
     *          name="centro",
     *          description="ID do centro",
     *          required=true,
     *          type="integer",
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="id",
     *          description="ID do curso",
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
    public function destroy($centro,$id)
    {
        $this->model->destroy($id);
        return response()->json('Item deletado com sucesso');
    }
}

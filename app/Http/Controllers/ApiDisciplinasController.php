<?php

namespace App\Http\Controllers;
use App\Disciplina as Model;
use Illuminate\Http\Request;

class ApiDisciplinasController extends Controller
{
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * @SWG\Get(
     *      path="/centros/{centro}/cursos/{curso}/disciplinas",
     *      tags={"Disciplinas"},
     *      summary="Pegar a lista de disciplinas",
     *      description="Retorna a lista de disciplinas de um curso",
     *      @SWG\Parameter(
     *          name="centro",
     *          description="ID do centro",
     *          required=true,
     *          type="integer",
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="curso",
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
     * Returns lista de cursos
     */
    public function index()
    {
        return response()->json($this->model->where('curso_id','=',app('request')->curso)->get());
    }

    /**
     * @SWG\Post(
     *     path="/centros/{centro}/cursos/{curso}/disciplinas",
     *     tags={"Disciplinas"},
     *     summary="Cadastrar uma nova disciplina",
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
     *          name="curso",
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
     *          @SWG\Property(property="descricao", type="string", example="ADMINISTRAÇÃO CONTEMPORÂNEA"),
     *          @SWG\Property(property="codigo", type="string", example="AD431"),
     *      ),
     *  ),
     * )
     */
    public function store(Request $request)
    {
        $disciplina = new $this->model;
        $disciplina->descricao = app('request')->all()['descricao'];
        $disciplina->codigo = app('request')->all()['codigo'];
        $disciplina->curso_id = app('request')->curso;
        $disciplina->save();
        return response()->json($disciplina);
    }

    /**
     * @SWG\Get(
     *      path="/centros/{centro}/cursos/{curso}/disciplinas/{id}",
     *      tags={"Disciplinas"},
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
     *          name="curso",
     *          description="ID do curso",
     *          required=true,
     *          type="integer",
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="id",
     *          description="ID da disciplina",
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
    public function show($centro,$curso,$id)
    {
        return response()->json($this->model->find($id));
    }

    /**
     * @SWG\Put(
     *     path="/centros/{centro}/cursos/{curso}/disciplinas/{id}",
     *     tags={"Disciplinas"},
     *     summary="Atualizar uma disciplina existente",
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
     *          name="curso",
     *          description="ID do curso",
     *          required=true,
     *          type="integer",
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="id",
     *          description="ID da disciplina",
     *          required=true,
     *          type="integer",
     *          in="path"
     *      ),
     *  @SWG\Parameter(
     *      name="body",
     *      in="body",
     *      description="Parâmetros da requisição",
     *      @SWG\Schema(
     *          @SWG\Property(property="descricao", type="string", example="ADMINISTRAÇÃO CONTEMPORÂNEA"),
     *          @SWG\Property(property="codigo", type="string", example="AD431"),
     *      ),
     *  ),
     * )
     */
    public function update(Request $request, $id)
    {
        $disciplina = $this->model->find(app('request')->disciplina);
        $disciplina->descricao = app('request')->all()['descricao'];
        $disciplina->codigo = app('request')->all()['codigo'];
        $disciplina->save();
        return response()->json($disciplina);
    }

    /**
     * @SWG\Delete(
     *      path="/centros/{centro}/cursos/{curso}/disciplinas/{id}",
     *      tags={"Disciplinas"},
     *      summary="Remove uma disciplina",
     *      description="Deleta a disciplina pelo ID",
     *      @SWG\Parameter(
     *          name="centro",
     *          description="ID do centro",
     *          required=true,
     *          type="integer",
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="curso",
     *          description="ID do curso",
     *          required=true,
     *          type="integer",
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="id",
     *          description="ID da disciplina",
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
    public function destroy($centro,$curso,$id)
    {
        $this->model->destroy($id);
        return response()->json('Item deletado com sucesso');
    }
}

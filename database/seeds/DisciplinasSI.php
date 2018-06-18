<?php

use Illuminate\Database\Seeder;

class DisciplinasSI extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('disciplinas')->insert([
            [
                'curso_id' => 3,
                'descricao' => 'ADMINISTRAÇÃO CONTEMPORÂNEA',
                'codigo' => 'AD431',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'CALCULO DIFERENCIAL E INTEGRAL 1',
                'codigo' => 'MA026',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'INTRODUÇÃO AOS SISTEMAS DE INFORMAÇÃO',
                'codigo' => 'IF966',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'MATEMÁTICA DISCRETA PARA COMPUTAÇÃO',
                'codigo' => 'IF967',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'PROGRAMAÇÃO 1',
                'codigo' => 'IF968',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'ALGORITMOS E ESTRUTURAS DE DADOS',
                'codigo' => 'IF969',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'ANÁLISE DAS ORGANIZACOES',
                'codigo' => 'AD291',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'ESTATÍSTICA E PROBABILIDADE PARA COMPUTAÇÃO',
                'codigo' => 'IF971',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'INGLÊS PARA COMPUTAÇÃO',
                'codigo' => 'LE732',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'LÓGICA PARA COMPUTAÇÃO',
                'codigo' => 'IF972',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'COMPORTAMENTO ORGANIZACIONAL',
                'codigo' => 'AD193',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'CONTABILIDADE DE CUSTOS E GERENCIAL',
                'codigo' => 'CT503',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'FUNDAMENTOS DE SISTEMAS DE INFORMAÇÃO',
                'codigo' => 'IF973',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'ORGANIZAÇÃO DE COMPUTADORES E SISTEMAS OPERACIONAIS',
                'codigo' => 'IF974',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'REDES DE COMPUTADORES',
                'codigo' => 'IF975',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'BANCO DE DADOS',
                'codigo' => 'IF976',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'ENGENHARIA DE SOFTWARE',
                'codigo' => 'IF977',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'GESTÃO DE PROCESSOS DE NEGÓCIO',
                'codigo' => 'IF978',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'PLANEJAMENTO E GERENCIAMENTO DE PROJETOS',
                'codigo' => 'IF979',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'SISTEMAS DE GESTÃO EMPRESARIAL',
                'codigo' => 'IF980',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'COMUNICAÇÃO TÉCNICA E CIENTÍFICA',
                'codigo' => 'CO691',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'GESTÃO DA INFORMAÇÃO E DO CONHECIMENTO',
                'codigo' => 'IF982',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'SISTEMAS DE APOIO À DECISÃO',
                'codigo' => 'IF983',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'ADMINISTRAÇÃO DE BANCO DE DADOS',
                'codigo' => 'IF991',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'ECONOMIA DAS EMPRESAS',
                'codigo' => 'EC453',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'GESTÃO DA PRODUÇÃO',
                'codigo' => 'EP100',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'PROGRAMAÇÃO 2',
                'codigo' => 'IF992',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'ESTÁGIO SUPERVISIONADO',
                'codigo' => 'IF984',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'PROJETO DE SISTEMA DE INFORMAÇÃO',
                'codigo' => 'IF985',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'VIABILIDADE ECONÔMICO',
                'codigo' => 'IF986',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'GESTÃO DE PESSOAS E EQUIPES',
                'codigo' => 'AD435',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'GESTÃO DE PROCESSOS DE TI',
                'codigo' => 'IF999',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'INTERAÇÃO HUMANO',
                'codigo' => 'IF1000',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'INTRODUÇÃO A LIBRAS',
                'codigo' => 'LE716',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'PROCESSOS DE SOFTWARE',
                'codigo' => 'IF993',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'PROGRAMAÇÃO 3',
                'codigo' => 'IF1001',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'QUALIDADE DE SOFTWARE E DA INFORMAÇÃO',
                'codigo' => 'IF994',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'SEMINÁRIO EM SI 1',
                'codigo' => 'IF995',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'SEMINÁRIO EM SI 2',
                'codigo' => 'IF996',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'TÓPICOS AVANÇADOS EM SI 1',
                'codigo' => 'IF997',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'TÓPICOS AVANÇADOS EM SI 2',
                'codigo' => 'IF998',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'AUDITORIA E SEGURANÇA DE SISTEMAS DE INFORMAÇÃO',
                'codigo' => 'IF987',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'ESTRATÉGIA E PLANEJAMENTO',
                'codigo' => 'AD432',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'AVALIAÇÃO DE DESEMPENHO DE SISTEMAS',
                'codigo' => 'IF1002',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'ENGENHARIA DE REQUISITOS',
                'codigo' => 'IF1008',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'INOVAÇÃO EM SI',
                'codigo' => 'IF1003',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'MARKETING EMPRESARIAL',
                'codigo' => 'AD433',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'PENSAMENTO SISTÊMICO',
                'codigo' => 'AD434',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'SEMINÁRIO EM SI 3',
                'codigo' => 'IF1004',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'SEMINÁRIO EM SI 4',
                'codigo' => 'IF1005',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'TESTE DE VALIDAÇÃO DE SOFTWARE',
                'codigo' => 'IF1009',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'TÓPICOS AVANÇADOS EM SI 3',
                'codigo' => 'IF1006',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'TÓPICOS AVANÇADOS EM SI 4',
                'codigo' => 'IF1007',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'EMPREENDIMENTOS EM INFORMÁTICA',
                'codigo' => 'IF988',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'TENDÊNCIAS E DESAFIOS EM SISTEMAS DE INFORMAÇÃO',
                'codigo' => 'IF989',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'TRABALHO DE CONCLUSÃO DE CURSO EM SISTEMAS DE INFORMAÇÃO',
                'codigo' => 'IF990',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'ADMINISTRAÇÃO DE SISTEMAS',
                'codigo' => 'IF1011',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'DIREITO E ÉTICA EM INFORMÁTICA',
                'codigo' => 'PG515',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'INTELIGÊNCIA ARTIFICIAL',
                'codigo' => 'IF1017',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'LOGÍSTICA',
                'codigo' => 'EP101',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'SEMINÁRIO EM SI 5',
                'codigo' => 'IF1012',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'SEMINÁRIO EM SI 6',
                'codigo' => 'IF1013',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'SISTEMAS MULTIMÍDIA',
                'codigo' => 'IF1018',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'TÓPICOS AVANÇADOS EM SI 5',
                'codigo' => 'IF1014',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'TÓPICOS AVANÇADOS EM SI 6',
                'codigo' => 'IF1015',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'ESTAGIO NÃO',
                'codigo' => 'IF1010',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'GESTÃO DE PORTIFÓLIO DE PROJETOS',
                'codigo' => 'IF1019',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'curso_id' => 3,
                'descricao' => 'RELAÇÕES RACIAIS',
                'codigo' => 'IN816',
                'created_at' => date("Y-m-d H:i:s")
            ]
        ]);
    }
}

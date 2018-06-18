<?php

use Illuminate\Database\Seeder;

class Cursos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dias')->insert([
            [
                'descricao' => 'Administração',
                'centro_id' => 1,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'descricao' => 'Ciências Econômicas',
                'centro_id' => 1,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'descricao' => 'Sistemas de Informação',
                'centro_id' => 2,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'descricao' => 'Engenharia da computação',
                'centro_id' => 2,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'descricao' => 'Ciência da computação',
                'centro_id' => 2,
                'created_at' => date("Y-m-d H:i:s")
            ]
        ]);
    }
}

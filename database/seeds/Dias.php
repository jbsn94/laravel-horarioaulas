<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Dias extends Seeder
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
                'descricao' => 'Segunda',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'descricao' => 'Terça',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'descricao' => 'Quarta',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'descricao' => 'Quinta',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'descricao' => 'Sexta',
                'created_at' => date("Y-m-d H:i:s")
            ]
        ]);
    }
}

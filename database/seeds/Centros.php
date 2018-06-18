<?php

use Illuminate\Database\Seeder;

class Centros extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('centros')->insert([
            [
                'descricao' => 'Centro de Ciências Sociais Aplicadas',
                'sigla' => 'CCSA',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'descricao' => 'Centro de Informática',
                'sigla' => 'CIN',
                'created_at' => date("Y-m-d H:i:s")
            ],
        ]);
    }
}

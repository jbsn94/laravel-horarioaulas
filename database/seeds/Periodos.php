<?php

use Illuminate\Database\Seeder;

class Periodos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('periodos')->insert([
            [
                'descricao' => '1º',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'descricao' => '2º',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'descricao' => '3º',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'descricao' => '4º',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'descricao' => '5º',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'descricao' => '6º',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'descricao' => '7º',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'descricao' => '8º',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'descricao' => '9º',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'descricao' => '10º',
                'created_at' => date("Y-m-d H:i:s")
            ]
        ]);
    }
}

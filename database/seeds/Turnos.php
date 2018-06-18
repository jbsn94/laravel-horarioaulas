<?php

use Illuminate\Database\Seeder;

class Turnos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('turnos')->insert([
            [
                'descricao' => 'Manhã',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'descricao' => 'Tarde',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'descricao' => 'Noite',
                'created_at' => date("Y-m-d H:i:s")
            ]
        ]);
    }
}

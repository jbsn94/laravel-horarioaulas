<?php

use Illuminate\Database\Seeder;

class Horarios1PSI extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('horarios')->insert([
            [
                'disciplina_id' => 1,
                'started_at' => '17:00',
                'end_at' => '18:40',
                'periodo_id' => 1,
                'dia_id' => 3,
                'turno_id' => 3,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'disciplina_id' => 1,
                'started_at' => '18:50',
                'end_at' => '20:30',
                'periodo_id' => 1,
                'dia_id' => 5,
                'turno_id' => 3,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'disciplina_id' => 2,
                'started_at' => '17:00',
                'end_at' => '18:40',
                'periodo_id' => 1,
                'dia_id' => 2,
                'turno_id' => 3,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'disciplina_id' => 2,
                'started_at' => '18:50',
                'end_at' => '20:30',
                'periodo_id' => 1,
                'dia_id' => 4,
                'turno_id' => 3,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'disciplina_id' => 3,
                'started_at' => '17:00',
                'end_at' => '18:40',
                'periodo_id' => 1,
                'dia_id' => 4,
                'turno_id' => 3,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'disciplina_id' => 3,
                'started_at' => '18:50',
                'end_at' => '20:30',
                'periodo_id' => 1,
                'dia_id' => 1,
                'turno_id' => 3,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'disciplina_id' => 4,
                'started_at' => '17:00',
                'end_at' => '18:40',
                'periodo_id' => 1,
                'dia_id' => 5,
                'turno_id' => 3,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'disciplina_id' => 4,
                'started_at' => '18:50',
                'end_at' => '20:30',
                'periodo_id' => 1,
                'dia_id' => 2,
                'turno_id' => 3,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'disciplina_id' => 5,
                'started_at' => '17:00',
                'end_at' => '18:40',
                'periodo_id' => 1,
                'dia_id' => 1,
                'turno_id' => 3,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'disciplina_id' => 5,
                'started_at' => '18:50',
                'end_at' => '20:30',
                'periodo_id' => 1,
                'dia_id' => 3,
                'turno_id' => 3,
                'created_at' => date("Y-m-d H:i:s")
            ]
        ]);
    }
}

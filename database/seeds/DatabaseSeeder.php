<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(Dias::class);
        $this->call(Turnos::class);
        $this->call(Periodos::class);
        $this->call(Centros::class);
        $this->call(Cursos::class);
        $this->call(DisciplinasSI::class);
    }
}

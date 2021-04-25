<?php

namespace Database\Seeders;

use App\Models\Curso;
use App\Models\Usuario;
use App\Models\Disciplina;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aluno = Usuario::factory()
            ->count(1)
            ->create();

            /** @var Usuario $aluno */
        $aluno = $aluno->first();
        $aluno->cursos()->attach(Curso::all()->first());
        $aluno->disciplinas()->attach(Disciplina::all()->first());

        Usuario::factory()
            ->count(1)
            ->adminRole()
            ->create();
    }
}

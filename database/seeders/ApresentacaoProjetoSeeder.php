<?php

namespace Database\Seeders;

use App\Models\Curso;
use App\Models\Usuario;
use App\Models\Disciplina;
use App\Models\Instituicao;
use Illuminate\Database\Seeder;

class ApresentacaoProjetoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Cria uma instituição com um curso e uma disciplina
        /** @var Instituicao $instituicao */
        $instituicao = Instituicao::factory()
            ->create([
                'nome' => 'Universidade Federal do Espírito Santo',
                'sigla' => 'UFES'
            ]);
        /** @var Curso $curso */
        $curso = Curso::factory()
            ->make([
                'nome' => 'Engenharia de Computação'
            ]);
        /** @var Disciplina $disciplina */
        $disciplina = Disciplina::factory()->create([
            'nome' => 'Projeto de Sistemas de Software',
            'codigo' => 'DCE11471'
        ]);

        // Relaciona instituição, curso e disciplinas criadas
        $curso->instituicao()->associate($instituicao);
        $curso->save();
        $disciplina->cursos()->attach($curso);
        $disciplina->save();

        // Cria um usuário teste do tipo aluno
        $aluno = Usuario::factory()
            ->create([
                'nome' => 'Aluno Teste',
                'email' => 'aluno@email.com'
            ]);

        // Relaciona esse aluno com a disciplina e curso criados
        $aluno->cursos()->attach(Curso::all()->first());
        $aluno->disciplinas()->attach(Disciplina::all()->first());

        // Cria um usuário teste do tipo admin
        // $this->call([UsuarioAdminSeeder::class]);
    }
}

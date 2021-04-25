<?php

namespace Database\Seeders;

use App\Models\Curso;
use App\Models\Disciplina;
use App\Models\Instituicao;
use Illuminate\Database\Seeder;

class InstituicaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Instituicao::factory()
            ->count(1)
            ->has(
                Curso::factory()
                    ->count(1)
                    ->has(
                        Disciplina::factory()
                            ->count(1)
                    )
            )
            ->create();
    }
}

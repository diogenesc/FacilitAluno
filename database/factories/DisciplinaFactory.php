<?php

namespace Database\Factories;

use App\Models\Disciplina;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class DisciplinaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Disciplina::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'codigo' => Str::upper(Str::random(6)),
            'nome' => $this->faker->sentence(),
            'carga_horaria' => $this->faker->numberBetween(2000, 3000),
            'status' => $this->faker->numberBetween(1, 3),
            'media' => $this->faker->numberBetween(6, 10),
            'porcent_faltas' => $this->faker->numberBetween(70, 100)
        ];
    }
}

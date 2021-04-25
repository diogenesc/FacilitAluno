<?php

namespace Database\Factories;

use App\Models\Instituicao;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class InstituicaoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Instituicao::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->sentence(),
            'sigla' => Str::upper(Str::random(4)),
            'localizacao' => $this->faker->address,
            'metodo_avaliacao' => $this->faker->numberBetween(6, 10),
            'divisao_periodos' => $this->faker->randomElement([12, 6, 4, 3, 2, 1])
        ];
    }
}

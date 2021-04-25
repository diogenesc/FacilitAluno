<?php

namespace Database\Factories;

use App\Models\Usuario;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsuarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Usuario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => 'Aluno ' . $this->faker->randomNumber(),
            'email' => $this->faker->unique()->safeEmail,
            'password' => Hash::make('12345678'),
            'flag_admin' => false
        ];
    }
    
    public function adminRole()
    {
        return $this->state(function (array $attributes) {
            return [
                'nome' => 'Admin ' . $this->faker->randomNumber(),
                'flag_admin' => true,
            ];
        });
    }
}

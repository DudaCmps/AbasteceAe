<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Endereco>
 */
class EnderecoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'cep' => fake()->numerify('#####-###'),
            'estado' => fake()->stateAbbr(),
            'cidade' => fake()->city(),
            'bairro' => fake()->streetName(),
            'logradouro' => fake()->streetAddress(),
            'numero' => fake()->buildingNumber(),
            'complemento' => fake()->optional()->secondaryAddress(),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Concert>
 */
class ConcertFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->word,
            'dia_inicio' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'dia_fin' => $this->faker->dateTimeBetween('now', '+1 year'),
            'max_personas' => $this->faker->numberBetween(50, 5000),
            'entradas_vendidas' => $this->faker->numberBetween(0, 5000),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Band>
 */
class BandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->name(),
            'tipo_musica' => $this->faker->randomElement(['Rock', 'Pop', 'Jazz', 'Classical', 'Hip Hop', 'Electronic']),
            'cantidad_miembros' => $this->faker->numberBetween(1, 50)
        ];
    }
}

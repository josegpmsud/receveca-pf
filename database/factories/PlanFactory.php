<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plan>
 */
class PlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ter_muerte' => fake()->numerify(),
            'ter_invalidez' => fake()->numerify(),
            'ter_medicos' => fake()->numerify(),
            'ocu_muerte' => fake()->numerify(),
            'ocu_invalidez' => fake()->numerify(),
            'ocu_medicos' => fake()->numerify(),
            'danos' => fake()->numerify(),
            'materiales' => fake()->numerify(),            
            'legal' => fake()->numerify(),
            'limites' => fake()->numerify(),
            'funerarios' => fake()->numerify(),
            'grua' => fake()->numerify(),
            'indem' => fake()->numerify(),            
            'extra' => fake()->numerify(),
            'valor' => fake()->numerify(),
            'descripcion' => fake()->text(15),            
            'estado' => random_int(1,3),
        ];
    }
}

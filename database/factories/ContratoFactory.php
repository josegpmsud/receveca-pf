<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contrato>
 */
class ContratoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_usuario' => random_int(1,5),
            'id_vehiculo' => random_int(1,10),
            'id_plan' => random_int(1,10),
            'fecha_ini' => fake()->date(),
            'fecha_fin' => fake()->date(),
            'codigo' => fake()->numberBetween(1000,9999),
            'cobertura' => fake()->numberBetween(500,10000),
            'pago' => fake()->numberBetween(15,200),           
            'estado' => random_int(1,3),
        ];
    }
}

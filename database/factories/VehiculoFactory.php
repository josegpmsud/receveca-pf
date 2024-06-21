<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehiculo>
 */
class VehiculoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_cliente' => random_int(1,10),
            'id_marca' => random_int(1,10),
            'modelo' => fake()->text(20),
            'id_clase' => random_int(1,10),
            'id_color' => random_int(1,10),
            'id_tipo' => random_int(1,5),
            'id_uso' => random_int(1,5),
            'placa' => fake()->text(8),
            'ano' => fake()->numberBetween(1950,2025),
            'peso' => fake()->numberBetween(100,5000),
            'serial_motor' => fake()->text(20),
            'puestos' => fake()->numberBetween(2,60),
            'serial_niv' => fake()->text(20),
              
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nac' => fake()->text(5),
            'nombre' => fake()->firstName(),
            'apellido' => fake()->lastName(),
            'cedula_rif' => fake()->text(10),
            'b_nac' => fake()->text(5),
            'b_nombre' => fake()->firstName(),
            'b_apellido' => fake()->lastName(),
            'b_cedula' => fake()->text(10),
            'direccion' => fake()->text(100),
            'telefono' => fake()->phoneNumber(),
            'estado' => random_int(1,3),
        ];
    }
}

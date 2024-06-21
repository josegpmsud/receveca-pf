<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => fake()->firstName(),
            'apellido' => fake()->lastName(),
            'usuario' => fake()->userName(),
            'contrasena' => fake()->password(),
            'id_rol' => random_int(1,3),        
                       
            'estado' => random_int(1,3),
        ];
    }
}

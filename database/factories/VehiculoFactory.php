<?php

namespace Database\Factories;

use App\Models\Vehiculo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehiculo>
 */
class VehiculoFactory extends Factory
{
    protected $model = Vehiculo::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'placa' =>$this->faker->sentence(),
            'modelo'=>$this->faker->sentence(),
            'propietario'=>$this->faker->sentence()
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
Use App\Models\Product;

class ProductFactory extends Factory
{
    protected $model= Product::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
            'precio' => $this->faker->numberbetween(100, 10000)
            //
        ];
    }
}
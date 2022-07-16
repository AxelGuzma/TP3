<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Store;

class StoreFactory extends Factory
{
    protected $model= Store::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'local' => $this->faker->name,
            'num_employees' => $this->faker->numberbetween(1, 30)
            //
        ];
    }
}
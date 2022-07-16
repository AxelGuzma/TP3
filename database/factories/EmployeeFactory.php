<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employee;

class EmployeeFactory extends Factory
{
   

    protected $model= Employee::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
            'documento' => $this->faker->name,
            'telefono' => $this->faker->numberbetween(90000000, 99999999)
            //
        ];
    }
}
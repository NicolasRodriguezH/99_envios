<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StatuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->word(20);

        /* Se supone que hay 24 posibles estatus*/

        return [
            'name' => $name,
            'color' => $this->faker->randomElement(['red', 'green', 'yellow', 'gray', 'blue'])
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SalaryScalesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'series' => $this->faker->jobTitle,
            'group'  => $this->faker->word,
            'scale1' => $this->faker->randomFloat,
            'scale2' => $this->faker->randomFloat,
            'scale3' => $this->faker->randomFloat,
            'scale4' => $this->faker->randomFloat,
            'scale5' => $this->faker->randomFloat,
            'scale6' => $this->faker->randomFloat,
            'scale7' => $this->faker->randomFloat,
            'scale8' => $this->faker->randomFloat,
        ];
    }
}

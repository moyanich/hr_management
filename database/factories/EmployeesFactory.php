<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id'                => $this->faker->numberBetween($min = 1000, $max = 9000),
            'firstname'         => $this->faker->firstName($gender = 'male'|'female'),
            'middlename'        => $this->faker->lastName(),
            'lastname'          => $this->faker->lastName(),
            'email'             => $this->faker->email(),
            'private_email'     => $this->faker->email(),
            'phone_number'      => $this->faker->tollFreePhoneNumber(),
            'emergency_number'  => $this->faker->tollFreePhoneNumber(),
            'date_of_birth'     => $this->faker->date($format = 'Y-m-d', $max = 'now') ,
            'hire_date'         => $this->faker->date($format = 'Y-m-d', $max = 'now'),
        ];
    }
}

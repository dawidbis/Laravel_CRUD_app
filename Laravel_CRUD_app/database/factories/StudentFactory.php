<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->firstName,
            'surname' => $this->faker->lastName,
            'email' => $this->faker->email,
            'phoneNumber' => $this->faker->e164PhoneNumber,
            'city' => $this->faker->city,
            'address' => $this->faker->streetAddress,
            'country' => $this->faker->country,
            'scholarship' => $this->faker->boolean
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'phone_number' => $this->faker->phoneNumber,
            'date_of_birth' => $this->faker->date(),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'marital_status' => $this->faker->randomElement(['single', 'married', 'divorced', 'widowed']),
            'address' => $this->faker->address,
            'city' => $this->faker->city,
            'postal_code' => $this->faker->postcode,
            'country' => $this->faker->country,
            'job_title' => $this->faker->jobTitle,
            'department' => $this->faker->word,
            'employment_type' => $this->faker->randomElement(['full-time', 'part-time', 'contract', 'intern']),
            'hire_date' => $this->faker->date(),
            'salary' => $this->faker->randomFloat(2, 30000, 120000),
            'bonus' => $this->faker->randomFloat(2, 1000, 10000),
            'work_email' => $this->faker->companyEmail,
            'work_phone' => $this->faker->phoneNumber,
            'office_location' => $this->faker->address,
            'shift_start_time' => $this->faker->time(),
            'shift_end_time' => $this->faker->time(),
            'vacation_days' => $this->faker->numberBetween(0, 30),
            'sick_days' => $this->faker->numberBetween(0, 10),
            'emergency_contact_name' => $this->faker->name,
            'emergency_contact_phone' => $this->faker->phoneNumber,
        ];
    }
}

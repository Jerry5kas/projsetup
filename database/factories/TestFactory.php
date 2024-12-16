<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Test>
 */
class TestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'f_name' => fake()->name(),
            'l_name' => fake()->name(),
            'age' => fake()->numberBetween(18, 60),
            'phone' => fake()->phoneNumber(),
            'mail' => fake()->email(),
            'date' => fake()->date(),
            's_date' => fake()->date(),
            'e_date' => fake()->date(),
            'body_1' => fake()->text(),
            'body_2' => fake()->text(),
            'body_3' => fake()->text(),
            'city' => fake()->city(),
            'state' => fake()->streetAddress(),
            'country' => fake()->country(),
            'opening_amount' => fake()->numberBetween(1000, 10000),
            'balance' => fake()->numberBetween(100, 1000),
            'is_active' => 1,
        ];
    }
}

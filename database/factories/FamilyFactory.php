<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Family>
 */
class FamilyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->lastName(),

            'summer_address_1' => fake()->unique()->streetAddress(),
            'summer_address_2' => '',
            'summer_address_city' => fake()->city(),
            'summer_address_region' => fake()->randomElement(['MI', 'NJ', 'NY', 'MA','ME','CA']),
            'summer_address_postal_code' => fake()->postcode(),

            'winter_address_1' => fake()->unique()->streetAddress(),
            'winter_address_2' => '',
            'winter_address_city' => fake()->city(),
            'winter_address_region' => fake()->randomElement(['MI', 'NJ', 'NY', 'MA','ME','CA']),
            'winter_address_postal_code' => fake()->postcode(),
        ];
    }
}

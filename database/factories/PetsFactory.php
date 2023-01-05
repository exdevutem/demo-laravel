<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pets>
 */
class PetsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mix ed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'last_bathed' => fake()->dateTimeThisMonth()
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Formulir>
 */
class FormulirFactory extends Factory
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
            'brand' => fake()->company(),
            'size' => fake()->randomFloat(2, 2.50, 99.99),
            'region' => fake()->country(),
            'picture' => 'https://source.unsplash.com/random/300×200/?shoes' .'&sig=' . rand(0, 1000),
        ];
    }
}

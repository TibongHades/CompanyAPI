<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Merchandise>
 */
class MerchandiseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'brand' => fake()->word,
            'description' => fake()->sentence,
            'retail_price' => fake()->randomFloat(2, 10, 1000),
            'wholesale_price' => fake()->randomFloat(2, 5, 500),
            'wholesale_qty' => fake()->numberBetween(1, 100),
            'qty_stock' => fake()->numberBetween(10, 1000),
        ];
    }
}

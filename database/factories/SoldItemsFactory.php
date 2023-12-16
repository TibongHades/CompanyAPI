<?php

namespace Database\Factories;

use App\Models\Merchandise;
use App\Models\Sale;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SoldItems>
 */
class SoldItemsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'merchandise_id' => Merchandise::factory(),
            'sale_id' => Sale::factory(),
            'qty' => fake()->numberBetween(1, 100),
            'selling_price' => fake()->numberBetween(1000,1000000),
        ];
    }
}

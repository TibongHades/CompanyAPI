<?php

namespace Database\Factories;

use App\Models\Merchandise;
use App\Models\Purchase;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PurchasedItems>
 */
class PurchasedItemsFactory extends Factory
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
            'purchase_id' => Purchase::factory(),
            'wholesale_qty' => fake()->numberBetween(1, 100),
            'purchase_price' => fake()->randomFloat(2, 10, 1000),
        ];
    }
}

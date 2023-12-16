<?php

namespace Database\Seeders;

use App\Models\PurchasedItems;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PurchasedItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PurchasedItems::factory(20)->create();
    }
}

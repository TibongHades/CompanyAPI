<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CustomerSeeder::class);
        $this->call(MerchandiseSeeder::class);
        $this->call(PurchaseSeeder::class);
        $this->call(SaleSeeder::class);
        $this->call(SupplierSeeder::class);
        $this->call(PurchasedItemsSeeder::class);
        $this->call(SoldItemsSeeder::class);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

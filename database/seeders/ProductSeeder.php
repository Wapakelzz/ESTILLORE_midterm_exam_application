<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Laptop',
            'description' => 'A high-performance laptop',
            'price' => 1000,
            'quantity' => 10,
        ]);

        Product::create([
            'name' => 'Smartphone',
            'description' => 'Latest model smartphone',
            'price' => 500,
            'quantity' => 15,
        ]);

        Product::create([
            'name' => 'Tablet',
            'description' => 'Portable touchscreen tablet',
            'price' => 300,
            'quantity' => 20,
        ]);
    }
}

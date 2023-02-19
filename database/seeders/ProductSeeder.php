<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory(100)->create()
            ->each(function ($product) {
                Image::factory(3)->create([
                    'imageable_id' => $product->id,
                    'imageable_type' => Product::class
                ]);
            });
    }
}

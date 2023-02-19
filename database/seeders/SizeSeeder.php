<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sizes = [
            'Talla S',
            'Talla X',
            'Talla L',
        ];

        Product::whereHas(
            'subcategory',
            fn (Builder $query) => $query->where('color', true)->where('size', true)
        )
            ->get()
            ->each(function ($product) use ($sizes) {
                foreach($sizes as $size) {
                    $product->sizes()->create([
                        'name' => $size
                    ]);
                }
            });
    }
}

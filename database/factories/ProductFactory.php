<?php

namespace Database\Factories;

use App\Models\Subcategory;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->sentence(2);
        
        $subcategory = Subcategory::all()->random();
        $category = $subcategory->category;
        $brand = $category->brands->random();

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => fake()->text(),
            'price' => fake()->randomElement([19.99, 49.99, 99.99]),
            'quantity' => ($subcategory->color) ? null : 15,
            'status' => 2,
            'subcategory_id' => $subcategory->id,
            'brand_id' => $brand->id,
        ];
    }
}

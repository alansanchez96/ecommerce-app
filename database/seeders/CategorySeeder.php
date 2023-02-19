<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Celulares y Tablets',
                'slug' => Str::slug('Celulares y Tablets'),
                'icon' => '<i class="fas fa-mobile-alt"></i>'
            ],
            [
                'name' => 'TV, Audio y Video',
                'slug' => Str::slug('TV, Audio y Video'),
                'icon' => '<i class="fas fa-tv"></i>'
            ],
            [
                'name' => 'Consola y Videojuegos',
                'slug' => Str::slug('Consola y Videojuegos'),
                'icon' => '<i class="fas fa-headset"></i>'
            ],
            [
                'name' => 'Computacion',
                'slug' => Str::slug('Computacion'),
                'icon' => '<i class="fas fa-laptop"></i>'
            ],
            [
                'name' => 'Moda',
                'slug' => Str::slug('Moda'),
                'icon' => '<i class="fas fa-tshirt"></i>'
            ]
        ];

        foreach ($categories as $category) {
            $category = Category::factory(1)->create($category)->first();
            Brand::factory(4)->create()
                ->each(fn ($brand) => $brand->categories()->attach($category->id));
        }
    }
}

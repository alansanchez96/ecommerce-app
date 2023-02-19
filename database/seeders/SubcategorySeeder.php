<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subcategories = [
            /* Celulares y Tablets */
            [
                'category_id' => 1,
                'name' => 'Celulares y Smartphone',
                'slug' => Str::slug('Celulares y Smartphone'),
                'color' => true,
            ],
            [
                'category_id' => 1,
                'name' => 'Accesorios para Celulares',
                'slug' => Str::slug('Accesorios para Celulares'),
            ],
            [
                'category_id' => 1,
                'name' => 'Smartwatches',
                'slug' => Str::slug('Smartwatches'),
            ],
            /* TV Audio y Video */
            [
                'category_id' => 2,
                'name' => 'TV y Audio',
                'slug' => Str::slug('TV y Audio')
            ],
            [
                'category_id' => 2,
                'name' => 'Audios',
                'slug' => Str::slug('Audios')
            ],
            [
                'category_id' => 2,
                'name' => 'Audio para Autos',
                'slug' => Str::slug('Audio para Autos')
            ],
            /* Consola y Videojuegos */
            [
                'category_id' => 3,
                'name' => 'Xbox',
                'slug' => Str::slug('Xbox')
            ],
            [
                'category_id' => 3,
                'name' => 'PlayStation',
                'slug' => Str::slug('PlayStation')
            ],
            [
                'category_id' => 3,
                'name' => 'Videosjuegos para PC',
                'slug' => Str::slug('Videosjuegos para PC')
            ],
            [
                'category_id' => 3,
                'name' => 'Nintendo',
                'slug' => Str::slug('Nintendo')
            ],
            /* Computacion */
            [
                'category_id' => 4,
                'name' => 'Portatiles',
                'slug' => Str::slug('Portatiles')
            ],
            [
                'category_id' => 4,
                'name' => 'PC de Escritorio',
                'slug' => Str::slug('PC de Escritorio')
            ],
            [
                'category_id' => 4,
                'name' => 'Almacenamiento',
                'slug' => Str::slug('Almacenamiento')
            ],
            [
                'category_id' => 4,
                'name' => 'Accesorio para Computadoras',
                'slug' => Str::slug('Accesorio para Computadoras')
            ],
            /* Modas */
            [
                'category_id' => 5,
                'name' => 'Mujeres',
                'slug' => Str::slug('Mujeres'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' => 5,
                'name' => 'Hombres',
                'slug' => Str::slug('Hombres'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' => 5,
                'name' => 'Lentes',
                'slug' => Str::slug('Lentes')
            ],
            [
                'category_id' => 5,
                'name' => 'Relojes',
                'slug' => Str::slug('Relojes')
            ],
        ];

        foreach ($subcategories as $subcategory) {
            Subcategory::factory(1)->create($subcategory);
        }

    }
}

<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Elektronik',
                'slug' => 'elektronik'
            ],
        ];

        foreach ($categories as $productCategory) {
            $category = new ProductCategory();

            $category->name = $productCategory['name'];
            $category->slug = $productCategory['slug'];

            $category->save();
        }
    }
}

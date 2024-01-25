<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = [
            [
                'category_name' => 'Clothes',
                'image' => 'category-1.png',
            ],
            [
                'category_name' => 'Stationary',
                'image' => 'category-2.png',
            ],
            [
                'category_name' => 'Daily Use',
                'image' => 'category-3.png',
            ],
            [
                'category_name' => 'Vegetables',
                'image' => 'category-4.png',
            ],
        ];

        Category::insert($category);
    }
}

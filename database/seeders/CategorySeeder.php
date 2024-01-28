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
                'category_name' => 'Beauty',
                'image' => 'beautyCategory.png',
            ],
            [
                'category_name' => 'Electronic',
                'image' => 'electronicCategory.png',
            ],
            [
                'category_name' => 'Fashion',
                'image' => 'FashionCategory.png',
            ],
            [
                'category_name' => 'Grocery',
                'image' => 'groceryCategory.png',
            ],
            [
                'category_name' => 'Home',
                'image' => 'homeCategory.png',
            ],
            [
                'category_name' => 'Sports And Out Door',
                'image' => 'SportsAndOutDoor.png',
            ],
            [
                'category_name' => 'Stationary',
                'image' => 'StationaryCategory.png',
            ],
            [
                'category_name' => 'Toy And Game',
                'image' => 'toyAndGameCategory.png',
            ],
        ];

        Category::insert($category);
    }
}

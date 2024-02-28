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
                'slug' => 'beauty',
                'image' => 'beautyCategory.png',
            ],
            [
                'category_name' => 'Electronic',
                'slug' => 'electronic',
                'image' => 'electronicCategory.png',
            ],
            [
                'category_name' => 'Fashion',
                'slug' => 'fashion',
                'image' => 'FashionCategory.png',
            ],
            [
                'category_name' => 'Grocery',
                'slug' => 'grocery',
                'image' => 'groceryCategory.png',
            ],
            [
                'category_name' => 'Home',
                'slug' => 'home',
                'image' => 'homeCategory.png',
            ],
            [
                'category_name' => 'Sports And Out Door',
                'slug' => 'sports-and-out-door',
                'image' => 'SportsAndOutDoor.png',
            ],
            [
                'category_name' => 'Stationary',
                'slug' => 'stationary',
                'image' => 'StationaryCategory.png',
            ],
            [
                'category_name' => 'Toy And Game',
                'slug' => 'toy-and-game',
                'image' => 'toyAndGameCategory.png',
            ],
        ];

        Category::insert($category);
    }
}

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
            ],
            [
                'category_name' => 'Stationary',
            ],
            [
                'category_name' => 'Daily Use',
            ],
            [
                'category_name' => 'Vegetables',
            ],
        ];

        Category::insert($category);
    }
}

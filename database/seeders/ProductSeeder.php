<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products=[
            [
                'product_name' => 'Tshirt',
                'price'=>'1000',
                'color'=>'red',
                'category'=>'cloths',
                'size'=>'XL',
                'material'=>'cotton',
                'brand'=> 'Nike',
                'weight'=>'1',
                'warranty'=>'2',
                'shop_name'=>'merchant',
                'shop_address'=>'',
                'merchant_email'=>'merchant@gmail.com',
                'images'=>'p1.png',
            ],
            [
                'product_name' => 'Pant',
                'price'=>'1000',
                'color'=>'red',
                'category'=>'cloths',
                'size'=>'XL',
                'material'=>'cotton',
                'brand'=> 'Nike',
                'weight'=>'1',
                'warranty'=>'2',
                'shop_name'=>'merchant',
                'shop_address'=>'',
                'merchant_email'=>'merchant@gmail.com',
                'images'=>'p2.png',
            ],
            [
                'product_name' => 'Jacket',
                'price'=>'1000',
                'color'=>'red',
                'category'=>'cloths',
                'size'=>'XL',
                'material'=>'cotton',
                'brand'=> 'Nike',
                'weight'=>'1',
                'warranty'=>'2',
                'shop_name'=>'merchant',
                'shop_address'=>'',
                'merchant_email'=>'merchant@gmail.com',
                'images'=>'p3.png',
            ],
        ];
        product::insert($products);
    }
}

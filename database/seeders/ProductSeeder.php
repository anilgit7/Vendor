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
                'product_name' => 'Beauty Blender',
                'price'=>'1000',
                'color'=>'red',
                'category'=>'Beauty',
                'size'=>'XL',
                'material'=>'Milk',
                'brand'=> 'Nike',
                'weight'=>'1',
                'warranty'=>'2',
                'shop_name'=>'merchant',
                'shop_address'=>'',
                'merchant_email'=>'merchant@gmail.com',
                'images'=>'beautyblenderProduct.png',
            ],
            [
                'product_name' => 'Body Oil',
                'price'=>'1100',
                'color'=>'red',
                'category'=>'Beauty',
                'size'=>'XL',
                'material'=>'oil',
                'brand'=> 'Nike',
                'weight'=>'1',
                'warranty'=>'2',
                'shop_name'=>'merchant2',
                'shop_address'=>'',
                'merchant_email'=>'merchant2@gmail.com',
                'images'=>'bodyOilProduct.png',
            ],
            [
                'product_name' => 'Eyelash Curler',
                'price'=>'1200',
                'color'=>'red',
                'category'=>'Beauty',
                'size'=>'XL',
                'material'=>'aluminium',
                'brand'=> 'Nike',
                'weight'=>'1',
                'warranty'=>'2',
                'shop_name'=>'merchant3',
                'shop_address'=>'',
                'merchant_email'=>'merchant3@gmail.com',
                'images'=>'eyeLashCurlerProduct.png',
            ],
            [
                'product_name' => 'Hair Brush',
                'price'=>'1300',
                'color'=>'red',
                'category'=>'Beauty',
                'size'=>'XL',
                'material'=>'plastic',
                'brand'=> 'Nike',
                'weight'=>'1',
                'warranty'=>'2',
                'shop_name'=>'merchant',
                'shop_address'=>'',
                'merchant_email'=>'merchant@gmail.com',
                'images'=>'hairbrushProduct.png',
            ],
            [
                'product_name' => 'Lipstick',
                'price'=>'1400',
                'color'=>'red',
                'category'=>'Beauty',
                'size'=>'XL',
                'material'=>'wax',
                'brand'=> 'Nike',
                'weight'=>'1',
                'warranty'=>'2',
                'shop_name'=>'merchant2',
                'shop_address'=>'',
                'merchant_email'=>'merchant2@gmail.com',
                'images'=>'Lipstick.png',
            ],
            [
                'product_name' => 'Mascara',
                'price'=>'1600',
                'color'=>'red',
                'category'=>'Beauty',
                'size'=>'XL',
                'material'=>'cotton',
                'brand'=> 'Nike',
                'weight'=>'1',
                'warranty'=>'2',
                'shop_name'=>'merchant3',
                'shop_address'=>'',
                'merchant_email'=>'merchant3@gmail.com',
                'images'=>'mascaraProduct.png',
            ],
            [
                'product_name' => 'Perfume',
                'price'=>'1700',
                'color'=>'red',
                'category'=>'Beauty',
                'size'=>'XL',
                'material'=>'cotton',
                'brand'=> 'Nike',
                'weight'=>'1',
                'warranty'=>'2',
                'shop_name'=>'merchant',
                'shop_address'=>'',
                'merchant_email'=>'merchant@gmail.com',
                'images'=>'perfumeProduct.png',
            ],
            [
                'product_name' => 'Kite Runner',
                'price'=>'1000',
                'color'=>'red',
                'category'=>'Stationary',
                'size'=>'XL',
                'material'=>'cotton',
                'brand'=> 'Nike',
                'weight'=>'1',
                'warranty'=>'2',
                'shop_name'=>'merchant2',
                'shop_address'=>'',
                'merchant_email'=>'merchant2@gmail.com',
                'images'=>'kiterunnerProduct.png',
            ],
            [
                'product_name' => 'Notebook',
                'price'=>'1000',
                'color'=>'red',
                'category'=>'Stationary',
                'size'=>'XL',
                'material'=>'cotton',
                'brand'=> 'Nike',
                'weight'=>'1',
                'warranty'=>'2',
                'shop_name'=>'merchant3',
                'shop_address'=>'',
                'merchant_email'=>'merchant3@gmail.com',
                'images'=>'notebookProduct.png',
            ],
            [
                'product_name' => 'Painting Color',
                'price'=>'900',
                'color'=>'red',
                'category'=>'Stationary',
                'size'=>'XL',
                'material'=>'cotton',
                'brand'=> 'Nike',
                'weight'=>'1',
                'warranty'=>'2',
                'shop_name'=>'merchant',
                'shop_address'=>'',
                'merchant_email'=>'merchant@gmail.com',
                'images'=>'paintingColorProduct.png',
            ],
            [
                'product_name' => 'Pilotpen',
                'price'=>'80',
                'color'=>'red',
                'category'=>'Stationary',
                'size'=>'XL',
                'material'=>'cotton',
                'brand'=> 'Nike',
                'weight'=>'1',
                'warranty'=>'2',
                'shop_name'=>'merchant2',
                'shop_address'=>'',
                'merchant_email'=>'merchant2@gmail.com',
                'images'=>'pilotpenProduct.png',
            ],
            [
                'product_name' => 'Sketching Marker',
                'price'=>'1300',
                'color'=>'red',
                'category'=>'Stationary',
                'size'=>'XL',
                'material'=>'cotton',
                'brand'=> 'Nike',
                'weight'=>'1',
                'warranty'=>'2',
                'shop_name'=>'merchant3',
                'shop_address'=>'',
                'merchant_email'=>'merchant3@gmail.com',
                'images'=>'sketchingMarkerProduct.png',
            ],
            [
                'product_name' => 'Airpods',
                'price'=>'1000',
                'color'=>'red',
                'category'=>'Electronic',
                'size'=>'XL',
                'material'=>'cotton',
                'brand'=> 'Nike',
                'weight'=>'1',
                'warranty'=>'2',
                'shop_name'=>'merchant',
                'shop_address'=>'',
                'merchant_email'=>'merchant@gmail.com',
                'images'=>'airpodsProduct.png',
            ],
            [
                'product_name' => 'Canon Camera',
                'price'=>'1000',
                'color'=>'red',
                'category'=>'Electronic',
                'size'=>'XL',
                'material'=>'cotton',
                'brand'=> 'Nike',
                'weight'=>'1',
                'warranty'=>'2',
                'shop_name'=>'merchant2',
                'shop_address'=>'',
                'merchant_email'=>'merchant2@gmail.com',
                'images'=>'CanonProduct.png',
            ],
            [
                'product_name' => 'Headphone',
                'price'=>'1000',
                'color'=>'red',
                'category'=>'Electronic',
                'size'=>'XL',
                'material'=>'cotton',
                'brand'=> 'Nike',
                'weight'=>'1',
                'warranty'=>'2',
                'shop_name'=>'merchant3',
                'shop_address'=>'',
                'merchant_email'=>'merchant3@gmail.com',
                'images'=>'headphoneProduct.png',
            ],
            [
                'product_name' => 'Iphone11 Charger',
                'price'=>'1100',
                'color'=>'red',
                'category'=>'Electronic',
                'size'=>'XL',
                'material'=>'cotton',
                'brand'=> 'Nike',
                'weight'=>'1',
                'warranty'=>'2',
                'shop_name'=>'merchant',
                'shop_address'=>'',
                'merchant_email'=>'merchant@gmail.com',
                'images'=>'iphone11ChargerProduct.png',
            ],
            [
                'product_name' => 'Mac Book Pro M2',
                'price'=>'10000',
                'color'=>'red',
                'category'=>'Electronic',
                'size'=>'XL',
                'material'=>'cotton',
                'brand'=> 'Nike',
                'weight'=>'1',
                'warranty'=>'2',
                'shop_name'=>'merchant2',
                'shop_address'=>'',
                'merchant_email'=>'merchant2@gmail.com',
                'images'=>'macBookProM2Product.png',
            ],
            [
                'product_name' => 'Powerban',
                'price'=>'1400',
                'color'=>'red',
                'category'=>'Electronic',
                'size'=>'XL',
                'material'=>'cotton',
                'brand'=> 'Nike',
                'weight'=>'1',
                'warranty'=>'2',
                'shop_name'=>'merchant3',
                'shop_address'=>'',
                'merchant_email'=>'merchant3@gmail.com',
                'images'=>'powerbankProduct.png',
            ],
            [
                'product_name' => 'Jacket',
                'price'=>'1200',
                'color'=>'red',
                'category'=>'Fashion',
                'size'=>'XL',
                'material'=>'cotton',
                'brand'=> 'Nike',
                'weight'=>'1',
                'warranty'=>'2',
                'shop_name'=>'merchant',
                'shop_address'=>'',
                'merchant_email'=>'merchant@gmail.com',
                'images'=>'jacket.png',
            ],
            [
                'product_name' => 'Pant',
                'price'=>'1000',
                'color'=>'red',
                'category'=>'Fashion',
                'size'=>'XL',
                'material'=>'cotton',
                'brand'=> 'Nike',
                'weight'=>'1',
                'warranty'=>'2',
                'shop_name'=>'merchant2',
                'shop_address'=>'',
                'merchant_email'=>'merchant2@gmail.com',
                'images'=>'pantProduct.png',
            ],
            [
                'product_name' => 'Sari',
                'price'=>'2000',
                'color'=>'red',
                'category'=>'Fashion',
                'size'=>'XL',
                'material'=>'cotton',
                'brand'=> 'Nike',
                'weight'=>'1',
                'warranty'=>'2',
                'shop_name'=>'merchant3',
                'shop_address'=>'',
                'merchant_email'=>'merchant3@gmail.com',
                'images'=>'sariProduct.png',
            ],
            [
                'product_name' => 'Sweater',
                'price'=>'3000',
                'color'=>'red',
                'category'=>'Fashion',
                'size'=>'XL',
                'material'=>'cotton',
                'brand'=> 'Nike',
                'weight'=>'1',
                'warranty'=>'2',
                'shop_name'=>'merchant',
                'shop_address'=>'',
                'merchant_email'=>'merchant@gmail.com',
                'images'=>'sweater.png',
            ],
            [
                'product_name' => 'Tshirt',
                'price'=>'500',
                'color'=>'red',
                'category'=>'Fashion',
                'size'=>'XL',
                'material'=>'cotton',
                'brand'=> 'Nike',
                'weight'=>'1',
                'warranty'=>'2',
                'shop_name'=>'merchant2',
                'shop_address'=>'',
                'merchant_email'=>'merchant2@gmail.com',
                'images'=>'tshirtProduct.png',
            ],
            [
                'product_name' => 'Coffee',
                'price'=>'1000',
                'color'=>'red',
                'category'=>'Grocery',
                'size'=>'XL',
                'material'=>'cotton',
                'brand'=> 'Nike',
                'weight'=>'1',
                'warranty'=>'2',
                'shop_name'=>'merchant3',
                'shop_address'=>'',
                'merchant_email'=>'merchant3@gmail.com',
                'images'=>'coffeeProduct.png',
            ],
            [
                'product_name' => 'Corn Flakes',
                'price'=>'1000',
                'color'=>'red',
                'category'=>'Grocery',
                'size'=>'XL',
                'material'=>'cotton',
                'brand'=> 'Nike',
                'weight'=>'1',
                'warranty'=>'2',
                'shop_name'=>'merchant',
                'shop_address'=>'',
                'merchant_email'=>'merchant@gmail.com',
                'images'=>'cornFlakesProduct.png',
            ],
            [
                'product_name' => 'Egg',
                'price'=>'450',
                'color'=>'red',
                'category'=>'Grocery',
                'size'=>'XL',
                'material'=>'cotton',
                'brand'=> 'Nike',
                'weight'=>'1',
                'warranty'=>'2',
                'shop_name'=>'merchant2',
                'shop_address'=>'',
                'merchant_email'=>'merchant2@gmail.com',
                'images'=>'eggProduct.png',
            ],
            [
                'product_name' => 'Juice',
                'price'=>'100',
                'color'=>'red',
                'category'=>'Grocery',
                'size'=>'XL',
                'material'=>'cotton',
                'brand'=> 'Nike',
                'weight'=>'1',
                'warranty'=>'2',
                'shop_name'=>'merchant3',
                'shop_address'=>'',
                'merchant_email'=>'merchant3@gmail.com',
                'images'=>'juiceProduct.png',
            ],
            [
                'product_name' => 'Milk',
                'price'=>'120',
                'color'=>'red',
                'category'=>'Grocery',
                'size'=>'XL',
                'material'=>'cotton',
                'brand'=> 'Nike',
                'weight'=>'1',
                'warranty'=>'2',
                'shop_name'=>'merchant',
                'shop_address'=>'',
                'merchant_email'=>'merchant@gmail.com',
                'images'=>'milkProduct.png',
            ],
            [
                'product_name' => 'Sausage',
                'price'=>'320',
                'color'=>'red',
                'category'=>'Grocery',
                'size'=>'XL',
                'material'=>'cotton',
                'brand'=> 'Nike',
                'weight'=>'1',
                'warranty'=>'2',
                'shop_name'=>'merchant2',
                'shop_address'=>'',
                'merchant_email'=>'merchant2@gmail.com',
                'images'=>'sausageProduct.png',
            ],
            [
                'product_name' => 'Bookcase',
                'price'=>'320',
                'color'=>'red',
                'category'=>'Home',
                'size'=>'XL',
                'material'=>'cotton',
                'brand'=> 'Nike',
                'weight'=>'1',
                'warranty'=>'2',
                'shop_name'=>'merchant3',
                'shop_address'=>'',
                'merchant_email'=>'merchant3@gmail.com',
                'images'=>'bookcaseProduct.png',
            ],
            [
                'product_name' => 'Chair',
                'price'=>'1400',
                'color'=>'red',
                'category'=>'Home',
                'size'=>'XL',
                'material'=>'cotton',
                'brand'=> 'Nike',
                'weight'=>'1',
                'warranty'=>'2',
                'shop_name'=>'merchant',
                'shop_address'=>'',
                'merchant_email'=>'merchant@gmail.com',
                'images'=>'chair.png',
            ],
            [
                'product_name' => 'Clock',
                'price'=>'850',
                'color'=>'red',
                'category'=>'Home',
                'size'=>'XL',
                'material'=>'cotton',
                'brand'=> 'Nike',
                'weight'=>'1',
                'warranty'=>'2',
                'shop_name'=>'merchant2',
                'shop_address'=>'',
                'merchant_email'=>'merchant2@gmail.com',
                'images'=>'clockProduct.png',
            ],
            [
                'product_name' => 'Couch',
                'price'=>'3200',
                'color'=>'red',
                'category'=>'Home',
                'size'=>'XL',
                'material'=>'cotton',
                'brand'=> 'Nike',
                'weight'=>'1',
                'warranty'=>'2',
                'shop_name'=>'merchant3',
                'shop_address'=>'',
                'merchant_email'=>'merchant3@gmail.com',
                'images'=>'couchProduct.png',
            ],
            [
                'product_name' => 'Knife',
                'price'=>'150',
                'color'=>'red',
                'category'=>'Home',
                'size'=>'XL',
                'material'=>'cotton',
                'brand'=> 'Nike',
                'weight'=>'1',
                'warranty'=>'2',
                'shop_name'=>'merchant',
                'shop_address'=>'',
                'merchant_email'=>'merchant@gmail.com',
                'images'=>'Knife.png',
            ],
            [
                'product_name' => 'Badminton',
                'price'=>'550',
                'color'=>'red',
                'category'=>'Sports And Out Door',
                'size'=>'XL',
                'material'=>'cotton',
                'brand'=> 'Nike',
                'weight'=>'1',
                'warranty'=>'2',
                'shop_name'=>'merchant2',
                'shop_address'=>'',
                'merchant_email'=>'merchant2@gmail.com',
                'images'=>'badmintonProduct.png',
            ],
            [
                'product_name' => 'Basketball',
                'price'=>'800',
                'color'=>'red',
                'category'=>'Sports And Out Door',
                'size'=>'XL',
                'material'=>'cotton',
                'brand'=> 'Nike',
                'weight'=>'1',
                'warranty'=>'2',
                'shop_name'=>'merchant3',
                'shop_address'=>'',
                'merchant_email'=>'merchant3@gmail.com',
                'images'=>'basketballProduct.png',
            ],
            [
                'product_name' => 'Boxing Gloves',
                'price'=>'5500',
                'color'=>'red',
                'category'=>'Sports And Out Door',
                'size'=>'XL',
                'material'=>'cotton',
                'brand'=> 'Nike',
                'weight'=>'1',
                'warranty'=>'2',
                'shop_name'=>'merchant',
                'shop_address'=>'',
                'merchant_email'=>'merchant@gmail.com',
                'images'=>'boxingGlovesProduct.png',
            ],
            [
                'product_name' => 'Dumbell',
                'price'=>'1400',
                'color'=>'red',
                'category'=>'Sports And Out Door',
                'size'=>'XL',
                'material'=>'cotton',
                'brand'=> 'Nike',
                'weight'=>'1',
                'warranty'=>'2',
                'shop_name'=>'merchant2',
                'shop_address'=>'',
                'merchant_email'=>'merchant2@gmail.com',
                'images'=>'dumbellProduct.png',
            ],
            [
                'product_name' => 'Football',
                'price'=>'700',
                'color'=>'red',
                'category'=>'Sports And Out Door',
                'size'=>'XL',
                'material'=>'cotton',
                'brand'=> 'Nike',
                'weight'=>'1',
                'warranty'=>'2',
                'shop_name'=>'merchant3',
                'shop_address'=>'',
                'merchant_email'=>'merchant3@gmail.com',
                'images'=>'footballProduct.png',
            ],
            [
                'product_name' => 'Punchingbag',
                'price'=>'3300',
                'color'=>'red',
                'category'=>'Sports And Out Door',
                'size'=>'XL',
                'material'=>'cotton',
                'brand'=> 'Nike',
                'weight'=>'1',
                'warranty'=>'2',
                'shop_name'=>'merchant',
                'shop_address'=>'',
                'merchant_email'=>'merchant@gmail.com',
                'images'=>'punchingbagProduct.png',
            ],
            [
                'product_name' => 'Jenga',
                'price'=>'1200',
                'color'=>'red',
                'category'=>'Toy And Game',
                'size'=>'XL',
                'material'=>'cotton',
                'brand'=> 'Nike',
                'weight'=>'1',
                'warranty'=>'2',
                'shop_name'=>'merchant2',
                'shop_address'=>'',
                'merchant_email'=>'merchant2@gmail.com',
                'images'=>'jengaProduct.png',
            ],
            [
                'product_name' => 'Ludo',
                'price'=>'1000',
                'color'=>'red',
                'category'=>'Toy And Game',
                'size'=>'XL',
                'material'=>'cotton',
                'brand'=> 'Nike',
                'weight'=>'1',
                'warranty'=>'2',
                'shop_name'=>'merchant3',
                'shop_address'=>'',
                'merchant_email'=>'merchant3@gmail.com',
                'images'=>'ludoProduct.png',
            ],
            [
                'product_name' => 'Poppet',
                'price'=>'100',
                'color'=>'red',
                'category'=>'Toy And Game',
                'size'=>'XL',
                'material'=>'cotton',
                'brand'=> 'Nike',
                'weight'=>'1',
                'warranty'=>'2',
                'shop_name'=>'merchant',
                'shop_address'=>'',
                'merchant_email'=>'merchant@gmail.com',
                'images'=>'poppetProduct.png',
            ],
            [
                'product_name' => 'Remote Control Car',
                'price'=>'1800',
                'color'=>'red',
                'category'=>'Toy And Game',
                'size'=>'XL',
                'material'=>'cotton',
                'brand'=> 'Nike',
                'weight'=>'1',
                'warranty'=>'2',
                'shop_name'=>'merchant2',
                'shop_address'=>'',
                'merchant_email'=>'merchant2@gmail.com',
                'images'=>'remoteCarProduct.png',
            ],
            [
                'product_name' => 'Rubik Cube',
                'price'=>'120',
                'color'=>'red',
                'category'=>'Toy And Game',
                'size'=>'XL',
                'material'=>'cotton',
                'brand'=> 'Nike',
                'weight'=>'1',
                'warranty'=>'2',
                'shop_name'=>'merchant3',
                'shop_address'=>'',
                'merchant_email'=>'merchant3@gmail.com',
                'images'=>'rubikCubeProduct.png',
            ],
            [
                'product_name' => 'UNO',
                'price'=>'100',
                'color'=>'red',
                'category'=>'Toy And Game',
                'size'=>'XL',
                'material'=>'cotton',
                'brand'=> 'Nike',
                'weight'=>'1',
                'warranty'=>'2',
                'shop_name'=>'merchant',
                'shop_address'=>'',
                'merchant_email'=>'merchant@gmail.com',
                'images'=>'unoProduct.png',
            ],
        ];
        product::insert($products);
    }
}

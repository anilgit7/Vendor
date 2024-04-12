<?php

namespace Database\Seeders;

use App\Models\Order_Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orderItems = [
            [
                'order_id'=>'1',
                'product_id'=>'13',
                'quantity'=>'3',
                'status'=>'pending',
                'created_at'=>'2024-04-12 03:34:30',
                'updated_at'=>'2024-04-12 03:34:30'
            ],
        ];
        Order_Item::insert($orderItems);
    }
}

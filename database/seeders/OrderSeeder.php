<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $order = [
            [
                'user_id'=>'5',
                'billing_name'=>'Test',
                'billing_address'=>'MCC5+WM7, Nagarkot Road, Bhaktapur 44800, Nepal',
                'latitude'=>'27.6722162',
                'longitude'=>'85.4092159',
                'billing_email'=>'customer@gmail.com',
                'payment'=>'cash',
                'subtotal'=>'3000',
                'shipping_cost'=>'30',
                'tax'=>'30',
                'total'=>'3060',
                'delivery_status'=>'pending',
                'order_tracking_id'=>'ot-1712892869',
                'created_at'=>'2024-04-12 03:34:29',
                'updated_at'=>'2024-04-12 03:34:29'
            ],
        ];

        Order::insert($order);
    }
}

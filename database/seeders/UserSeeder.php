<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\user;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users=[
            [
                'name'=>'admin',
                'email'=>'admin@gmail.com',
                'user_type'=>'0',
                'phone_number'=>'',
                'password'=>Hash::make('admin'),
            ],
            [
                'name'=>'merchant',
                'email'=>'merchant@gmail.com',
                'user_type'=>'1',
                'phone_number'=>'',
                'password'=>Hash::make('admin'),
            ],
            [
                'name'=>'customer',
                'email'=>'customer@gmail.com',
                'user_type'=>'2',
                'phone_number'=>'',
                'password'=>Hash::make('admin'),
            ],
        ];
        User::insert($users);
    }
}

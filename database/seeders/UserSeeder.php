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
                'status' => 'verified',
                'phone_number'=>'',
                'password'=>Hash::make('admin'),
            ],
            [
                'name'=>'merchant',
                'email'=>'merchant@gmail.com',
                'user_type'=>'1',
                'status' => 'verified',
                'phone_number'=>'',
                'password'=>Hash::make('admin'),
            ],
            [
                'name'=>'customer',
                'email'=>'customer@gmail.com',
                'user_type'=>'2',
                'status' => 'verified',
                'phone_number'=>'',
                'password'=>Hash::make('admin'),
            ],
            [
                'name'=>'test',
                'email'=>'test@gmail.com',
                'user_type'=>'2',
                'status' => 'verified',
                'phone_number'=>'',
                'password'=>Hash::make('admin'),
            ],
            [
                'name'=>'test1',
                'email'=>'test1@gmail.com',
                'user_type'=>'2',
                'status' => 'verified',
                'phone_number'=>'',
                'password'=>Hash::make('admin'),
            ],
            [
                'name'=>'test2',
                'email'=>'test2@gmail.com',
                'user_type'=>'2',
                'status' => 'verified',
                'phone_number'=>'',
                'password'=>Hash::make('admin'),
            ],
            [
                'name'=>'test3',
                'email'=>'test3@gmail.com',
                'user_type'=>'2',
                'status' => 'verified',
                'phone_number'=>'',
                'password'=>Hash::make('admin'),
            ],
            [
                'name'=>'test4',
                'email'=>'test4@gmail.com',
                'user_type'=>'2',
                'status' => 'verified',
                'phone_number'=>'',
                'password'=>Hash::make('admin'),
            ],
            [
                'name'=>'test5',
                'email'=>'test5@gmail.com',
                'user_type'=>'2',
                'status' => 'verified',
                'phone_number'=>'',
                'password'=>Hash::make('admin'),
            ],
        ];
        User::insert($users);
    }
}

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
                'latitude'=>'27.6715239',
                'longitude'=>'85.3086754',
                'password'=>Hash::make('admin'),
            ],
            [
                'name'=>'merchant',
                'email'=>'merchant@gmail.com',
                'user_type'=>'1',
                'status' => 'verified',
                'phone_number'=>'',
                'latitude'=>'27.6755019',
                'longitude'=>'85.3680559',
                'password'=>Hash::make('admin'),
            ],
            [
                'name'=>'merchant2',
                'email'=>'merchant2@gmail.com',
                'user_type'=>'1',
                'status' => 'verified',
                'phone_number'=>'',
                'latitude'=>'27.6907634',
                'longitude'=>'85.3395521',
                'password'=>Hash::make('admin'),
            ],
            [
                'name'=>'merchant3',
                'email'=>'merchant3@gmail.com',
                'user_type'=>'1',
                'status' => 'verified',
                'phone_number'=>'',
                'latitude'=>'27.7045238',
                'longitude'=>'85.3242053',
                'password'=>Hash::make('admin'),
            ],
            [
                'name'=>'customer',
                'email'=>'customer@gmail.com',
                'user_type'=>'2',
                'status' => 'verified',
                'phone_number'=>'',
                'latitude'=>'27.6749323',
                'longitude'=>'85.3694758',
                'password'=>Hash::make('admin'),
            ],
        ];
        User::insert($users);
    }
}

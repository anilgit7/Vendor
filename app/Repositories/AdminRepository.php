<?php
namespace App\Repositories;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use App\Repositories\Interfaces\AdminRepositoryInterface;

class AdminRepository implements AdminRepositoryInterface{
    public function new_merchant(){
        return User::where('user_type', '1')->where('status', 'unverified')->get();
    }
    public function verified_merchant(){
        return User::where('user_type','1')->where('status','verified')->get();
    }
    public function find_account($id){
        return User::find($id);
    }
    public function customer_list(){
        return User::where('user_type','2')->get();
    }
    public function create_category(){
        return new Category;
    }
    public function get_category(){
        return Category::get()->all();
    }
    public function find_category($id){
        return Category::find($id);
    }
    public function category_exist($category_name){
        return Category::where('category_name', $category_name)->exists();
    }
    public function get_category_product($category){
        return Product::where('category', $category)->get()->all();
    }
    public function category_product_exist($category){
        return Product::where('category', $category)->exists();
    }
    public function get_order(){
        return Order::get();
    }
}
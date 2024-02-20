<?php
namespace App\Repositories;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Interfaces\MerchantRepositoryInterface;

class MerchantRepository implements MerchantRepositoryInterface{
    public function find_product($id){
        return Product::find($id);
    }
    public function create_product(){
        return new Product;
    }
    public function get_product(){
        return Product::get()->all();
    }
    public function get_category(){
        return Category::get()->all();
    }
    public function product_list(){
        return Product::where('shop_name', Auth::user()->name)->get()->all();
    }

}
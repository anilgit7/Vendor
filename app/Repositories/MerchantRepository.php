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
        $merchant = auth()->user();
    
        if (!$merchant) {
            return redirect()->back()->with(['message' => 'Merchant not found']);
        }
        $product = $merchant->product;
        return $product;
    }
    public function get_category(){
        return Category::get()->all();
    }
    public function product_list(){
        $merchant = auth()->user();
    
        if (!$merchant) {
            return response()->json(['message' => 'Merchant not found']);
        }
        $product = $merchant->product;
        return $product;
        // return Product::where('merchant_id', Auth::user()->name)->get()->all();
    }

}
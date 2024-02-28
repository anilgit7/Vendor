<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function list_product(Request $request,Category $category){
        $categories = Category::all();
        // Determine the sorting method
        $sort = $request->query('sort');
        $sorted = 'random'; // Default value for $sorted
        // Fetch products based on the sorting method
        switch ($sort) {
            case 'a_to_z':
                $sorted = 'a_to_z';
                $productlists = $category->product()->orderBy('product_name', 'asc')->get();
                break;
            case 'z_to_a':
                $sorted = 'z_to_a';
                $productlists = $category->product()->orderBy('product_name', 'desc')->get();
                break;
            case 'price_low_to_high':
                $sorted = 'price_low_to_high';
                $productlists = $category->product()->orderBy('price', 'asc')->get();
                break;
            case 'price_high_to_low':
                $sorted = 'price_high_to_low';
                $productlists = $category->product()->orderBy('price', 'desc')->get();
                break;
            default:
                $productlists = $category->product()->inRandomOrder()->get();
                break;
        }
        return view('frontend.product', compact('categories', 'productlists', 'category', 'sorted'))->with(['message' => 'Items sorted successfully']);
    }
    public function product_detail(Product $product){
        $product = Product::where('slug',$product->slug)->first();
        if (!$product) {
            return redirect()->back()->with('error','Product not found');
        }
        return view('frontend.product',compact('product'));
    }
}

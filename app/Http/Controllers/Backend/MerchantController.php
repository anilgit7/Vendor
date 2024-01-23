<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MerchantController extends Controller
{
    public function index(){
        $title="merchant";
        return view('backend.merchant',compact('title'));
    }
    public function view_product(){
        $title="Product";
        $categories=Category::get()->all();
        return view('backend.merchant',compact('title','categories'));
    }
    public function store(Request $request)
    {
        $product = new Product;
        $product->product_name = $request->input('product_name');
        $product->price = $request->input('product_price');
        $product->color = $request->input('product_color');
        $product->category = $request->input('product_category');
        $product->size = $request->input('product_size');
        $product->material = $request->input('product_material');
        $product->brand = $request->input('product_brand');
        $product->weight = $request->input('product_weight');
        $product->warranty = $request->input('product_warranty');
        $product->shop_name = $request->input('shop_name');
        $product->merchant_email = $request->input('merchant_email');

        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('images/backend/products',$imagename);
        $product->images = $imagename;

        $product->save();
        return redirect()->back()->with('message','Image Upload Successfully');
    }
}

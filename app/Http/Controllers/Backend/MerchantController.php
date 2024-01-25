<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class MerchantController extends Controller
{
    public function index(){
        $title="merchant";
        return view('backend.merchant',compact('title'));
    }
    public function view_product(){
        $title="Product";
        $categories=Category::get()->all();
        $products=Product::get()->all();
        return view('backend.merchant',compact('title','categories','products'));
    }
    public function list_product(){
        $products = Product::where('shop_name', Auth::user()->name)->get()->all();
        return response()->json(['products'=>$products]);
    }
    public function add_product(Request $request)
    {
        $product = new Product;
        $product->product_name = $request->product_name;
        $product->price = $request->product_price;
        $product->color = $request->product_color;
        $product->category = $request->product_category;
        $product->size = $request->product_size;
        $product->material = $request->product_material;
        $product->brand = $request->product_brand;
        $product->weight = $request->product_weight;
        $product->warranty = $request->product_warranty;
        $product->shop_name = $request->shop_name;
        $product->merchant_email = $request->merchant_email;

        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('images/backend/products',$imagename);
        $product->images = $imagename;

        $product->save();
        return response()->json(['message'=>'Product added successfully']);
    }
    public function delete_product($id){
        $product = Product::find($id);
        if($product){
            $product_image = $product->images;
            $product_name =$product->product_name;
            $product->delete();
            $image_path = 'images/backend/products/'.$product_image; 
            if (File::exists($image_path)){
                File::delete($image_path);
            }
            return response()->json(['message' => 'Product '.$product_name.' deleted successfully']);
        }
        else{
            return response()->json([
                'status' => '404',
                'error' => 'Image not found',
            ]);
        }
    }
    public function edit_product($id){
        $product = Product::find($id);
        if($product){
            return response()->json([
                'product' => $product
            ]);
        }
        else{
            return response()->json([
                'status' => '404',
                'message' => 'product not found'
            ]);
        }
    }
    public function update_product(Request $request, $id){
        $product= Product::find($id);
        $product->product_name = $request->edit_product_name;
        $product->price = $request->edit_product_price;
        $product->color = $request->edit_product_color;
        $product->category = $request->edit_product_category;
        $product->size = $request->edit_product_size;
        $product->material = $request->edit_product_material;
        $product->brand = $request->edit_product_brand;
        $product->weight = $request->edit_product_weight;
        $product->warranty = $request->edit_product_warranty;
        if($request->edit_product_image){
            $product_image = $product->images;
            $image_path = 'images/backend/products/'.$product_image;
            if (File::exists($image_path)){
                File::delete($image_path);
            }
            $image = $request->edit_product_image;
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->edit_product_image->move('images/backend/products',$imagename);
            $product->images = $imagename;
        }
        $product->update();
        return response()->json(['message' => 'Product updated successfully']);
    }
}

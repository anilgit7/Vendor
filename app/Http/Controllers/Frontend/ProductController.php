<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
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
    public function buy_now(Request $request){
        $stock = 10;
        $product_id = $request->product_id;
        $product_quantity = $request->quantity;

        // Get product details from the database or elsewhere
        $product = Product::find($product_id);

        // Check if the product exists
        if (!$product) {
            return response()->json(['error' => true, 'message' => 'Product not found']);
        }
        // Check if the requested quantity exceeds the stock
        if ($product_quantity > $stock) {
            return response()->json(['info' => true, 'message' => 'Item out of stock']);
        }
        // Check if the product is already in the cart
        $cartItem = Cart::search(function ($cartItem, $rowId) use ($product_id) {
            return $cartItem->id == $product_id;
        })->first();
        
        if ($cartItem) {
            $newQuantity = $cartItem->qty + $product_quantity;
            if ($newQuantity > $stock) {
                return response()->json(['warning' => true, 'message' => 'Quantity exceeds available stock']);
            }
            Cart::update($cartItem->rowId, $newQuantity);
            // return response()->json(['success' => true, 'message' => 'Cart updated successfully']);
            // $response = [
            //     'success' => true,
            //     'view' => view('frontend.component.cart_counter')->render(),
            //     'message' => 'Cart updated successfully',
            // ];
            // return response()->json($response);
            return redirect()->route('cart.index')->with(['success'=>true,'message'=>'Item added successfully']);

        }
        Cart::add($product->id, $product->product_name, $product_quantity,  $product->price, ['images'=>$product->images,'stock'=>$stock]);
        // return response()->json(['success' => true, 'message' => 'Item added successfully']);
        // $response = [
        //     'success' => true,
        //     'view' => view('frontend.component.cart_counter')->render(),
        //     'message' => 'Item added successfully',
        // ];
        // return response()->json($response);
        return redirect()->route('cart.index')->with(['success'=>true,'message'=>'Item added successfully']);

    }
}

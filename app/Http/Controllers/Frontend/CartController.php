<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::content();
        return view('frontend.cart',compact('carts'));
    }
    public function addToCart(Request $request)
    {
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
            $response = [
                'success' => true,
                'view' => view('frontend.component.cart_counter')->render(),
                'message' => 'Cart updated successfully',
            ];
            return response()->json($response);

        }
        Cart::add($product->id, $product->product_name, $product_quantity,  $product->price, ['images'=>$product->images,'stock'=>$stock]);
        // return response()->json(['success' => true, 'message' => 'Item added successfully']);
        $response = [
            'success' => true,
            'view' => view('frontend.component.cart_counter')->render(),
            'message' => 'Item added successfully',
        ];
        return response()->json($response);
    }

    public function update(Request $request, $cartRowId) {
        $newQuantity = $request->quantity;
    
        // Check if the requested quantity exceeds the stock
        $stock = 10;
        if ($newQuantity > $stock) {
            return response()->json(['warning' => true, 'message' => 'Quantity exceeds available stock']);
        }
    
        // Get the cart item to be updated
        $cartItem = Cart::get($cartRowId);
        // Check if the cart item exists
        if (!$cartItem) {
            return response()->json(['error' => true, 'message' => 'Item not found in cart']);
        }
        // dd($cartItem,Cart::update($cartRowId, $newQuantity));
        // Update the quantity of the cart item
        Cart::update($cartRowId, $newQuantity);
        $response = [
            'success' => true,
            'view' => view('frontend.component.cart_updater')->render(),
            'view2' => view('frontend.component.cart_counter')->render(),
            'message' => 'Cart updated successfully',
        ];
        
        return response()->json($response);
    }
    public function delete($cartRowId){
        Cart::remove($cartRowId);
        return redirect()->back()->with(['success'=>true,'message'=>'Items removed from the cart.']);
    }

    public function delete_all(){
        Cart::destroy();
        return redirect()->back()->with(['success'=>true,'message'=>'All items removed.']);
    }
}
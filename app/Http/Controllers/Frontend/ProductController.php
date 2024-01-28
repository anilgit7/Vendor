<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function list_product($category){
        $categories = Category::get()->all();
        $productlists = Product::where('category', $category)->get()->all();
        $category_name = $category;
        return view('frontend.product',compact('categories', 'productlists','category_name'));
    }

    public function product_detail($id){
        $product = Product::find($id);
        if(Auth::user()){
            $user_email = Auth::user()->email;
            $cart = Cart::where('item_name',$product->product_name)->where('user_email',$user_email)->where('merchant_email',$product->merchant_email)->exists();
        }
        else{
            $cart = '';
        }
        return view('frontend.product',compact('product','cart'));
    }



    public function cart(Request $request, $id){
        $lists = Product::find($id);
        $merchant_email = $lists->merchant_email;
        $category = $lists->category;
        $addCarts = Cart::get()->all();
        if(Cart::exists()){
            $name = $request->name;
            $user_email = Auth::user()->email;
            if(Cart::where('item_name', $name)->where('user_email', $user_email)->where('merchant_email', $merchant_email)->exists()){
                return redirect()->back();
                // return response()->json(['message' => 'Successfully added to cart']);
            }
            else{
                $carts = new Cart;
                $carts->item_name = $request->name;
                $carts->item_image = $request->image;
                $carts->price = $request->price;
                $carts->quantity = $request->quantity;
                $carts->merchant_email = $request->merchant_email;
                $carts->user_email = $request->user_email;
                $carts->user_phone = $request->user_phone;
                $carts->save();
                return redirect()->back();
            }
        }
        else{

            $carts = new Cart;
            $carts->item_name = $request->name;
            $carts->item_image = $request->image;
            $carts->price = $request->price;
            $carts->quantity = $request->quantity;
            $carts->merchant_email = $request->merchant_email;
            $carts->user_email = $request->user_email;
            $carts->user_phone = $request->user_phone;
            $carts->save();
            return redirect()->back();
        }
        
    }

    public function buy_now(Request $request, $id){
        $lists = Product::find($id);
        $merchant_email = $lists->merchant_email;
        $category = $lists->category;
        $addCarts = Cart::get()->all();
        if(Cart::exists()){
            $name = $request->name;
            $user_email = Auth::user()->email;
            if(Cart::where('item_name', $name)->where('user_email', $user_email)->where('merchant_email', $merchant_email)->exists()){
                return redirect()->route('product.cartlist');
                // return response()->json(['message' => 'Successfully added to cart']);
            }
            else{
                $carts = new Cart;
                $carts->item_name = $request->name;
                $carts->item_image = $request->image;
                $carts->price = $request->price;
                $carts->quantity = $request->quantity;
                $carts->merchant_email = $request->merchant_email;
                $carts->user_email = $request->user_email;
                $carts->user_phone = $request->user_phone;
                $carts->save();
                return redirect()->route('product.cartlist');
            }
        }
        else{

            $carts = new Cart;
            $carts->item_name = $request->name;
            $carts->item_image = $request->image;
            $carts->price = $request->price;
            $carts->quantity = $request->quantity;
            $carts->merchant_email = $request->merchant_email;
            $carts->user_email = $request->user_email;
            $carts->user_phone = $request->user_phone;
            $carts->save();
            return redirect()->route('product.cartlist');
        }
        
    }

    public function ajax_product_cart_delete($id){
        $product = product::find($id);
        $user_email = Auth::user()->email;
        $cart = Cart::where('item_name', $product->product_name)->where('merchant_email', $product->merchant_email)->where('user_email',$user_email);
        $cart->delete();
        return response()->json('Removed successfully');
    } 

    public function cartlist(){
        $user_email = Auth::user()->email;
        $carts = Cart::where('user_email', $user_email)->get()->all();
        return view('frontend.product', compact('carts'));
    }

    public function cartlist_delete($id)
    {
        $cart = Cart::find($id);
        $cart->delete();
        return redirect()->back();
    }

    public function cartlist_delete_name($id)
    {
        $cart = Cart::where('item_name',$id);
        $cart->delete();
        return redirect()->back();
    }

    public function cartlist_delete_all()
    {
        $user_email = Auth::user()->email;
        $carts = Cart::where('user_email', $user_email)->get()->all();
        foreach($carts as $cart){
            $cart->delete();
        }
        
        return redirect()->back()->with('message', 'removed all item from cart successfully');
    }

    public function cartlist_update_quantity(Request $request, $id)
    {
        $quantity = Cart::find($id);
        $quantity->quantity = $request->quantity;
        $quantity->save();
        return redirect()->back();
    }

    public function order()
    {
        $user_email = Auth::user()->email;
        $carts = Cart::where('user_email', $user_email)->get()->all();
        $orders = Order::get()->all();
        foreach($carts as $cart){
            if($orders){
                foreach($orders as $order){
                    $orderlists = Order::where('item_name', $cart->item_name)->where('merchant_email', $cart->merchant_email)->where('user_email', $cart->user_email)->get()->all();
                    if($orderlists){
                        foreach($orderlists as $orderlist){
                            $orderlist->quantity = $cart->quantity;
                            $orderlist->delivery_status = 'accepted';
                            $orderlist->save();
                        }
                    }
                    else{
                        $order = new Order;
                        $order->item_name = $cart->item_name;
                        $order->item_image = $cart->item_image;
                        $order->price = $cart->price;
                        $order->quantity = $cart->quantity;
                        $order->merchant_email = $cart->merchant_email;
                        $order->user_email = $cart->user_email;
                        $order->user_phone = $cart->user_phone;
                        $order->delivery_status = 'accepted';
                        $order->save();
                    }
                }
            }
            else{
                $order = new Order;
                $order->item_name = $cart->item_name;
                $order->item_image = $cart->item_image;
                $order->price = $cart->price;
                $order->quantity = $cart->quantity;
                $order->merchant_email = $cart->merchant_email;
                $order->user_email = $cart->user_email;
                $order->user_phone = $cart->user_phone;
                $order->delivery_status = 'accepted';
                $order->save();
            }
        }
        $user_email = Auth::user()->email;
        $carts = Cart::where('user_email', $user_email)->get()->all();
        foreach($carts as $cart){
            $cart->delete();
        }
        return redirect()->back();
    }
}

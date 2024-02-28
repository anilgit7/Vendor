<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Order_Item;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function checkout(){
        if(Cart::count()>0){
            return view('frontend.checkout');
        }
        else{
            if(session()->has('success')){
                return redirect()->route('cart.index')->with(['success'=>true,'message'=>session('message')]);
            }
            else{
                return redirect()->route('cart.index')->with(['error'=>true,'message'=>'No items in the cart']);
            }
        }
    }

    public function order(Request $request){
        if(auth()->check()) {
            $order = new Order;
            $order->user_id = Auth::user()->id;
            $order->billing_name= $request->first_name.' '.$request->last_name;
            $order->billing_address = $request->address;
            $order->billing_address = 'from the map';
            $order->billing_email = $request->email;
            $order->payment = $request->payment;
            $order->shipping_cost = $request->shipping;
            $order->tax = $request->tax;
            
            // Calculate total based on shipping cost, tax, and subtotal
            $order->subtotal = Cart::subtotal();
            $order->total = $order->subtotal + $order->shipping_cost + $order->tax;
    
            $order->delivery_status = 'pending';
            $order->save();
            foreach(Cart::content() as $cartItem) {
                $order->orderItems()->create([
                    'product_id' => $cartItem->id,
                    'quantity' => $cartItem->qty,
                ]);
            }
            Cart::destroy();
            return redirect()->back()->with(['success'=>true,'message'=>'Order has been placed.']);
        }
        else{
            return redirect()->route('login')->with(['error' => true, 'message' => 'You must be logged in to place an order.']);
        }
    }
}

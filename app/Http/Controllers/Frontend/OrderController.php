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
            if($request->payment == 'cash'){
                create_order($request);
                return redirect()->back()->with(['success'=>true,'message'=>'Order has been placed.']);
            }
            if($request->payment == 'cash'){
                // statements to go to esewa
                // create_order($request);
                // return redirect()->back()->with(['success'=>true,'message'=>'Order has been placed.']);
            }
        }
        else{
            return redirect()->route('login')->with(['error' => true, 'message' => 'You must be logged in to place an order.']);
        }
    }
}

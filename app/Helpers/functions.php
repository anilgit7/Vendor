<?php

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;

use Illuminate\Support\Str;
function create_slug($title){

    $slug = Str::slug($title,'-');

    $allSlugs =  Category::select('slug')->where('slug', 'like', $slug.'%')
            ->where('id', '<>', 0)
            ->get();

    //if not used the slug before
    if (! $allSlugs->contains('slug', $slug)){
        return $slug;
    }

    //if the slug is used before
    $i=1;
    while($i <= 10){
        $newSlug = $slug.'-'.$i;
        if (! $allSlugs->contains('slug', $newSlug)) {
            return $newSlug;
        }
        $i++;
    }
    return $slug;
}

function find_product($id){
    return Product::find($id);
}

function create_order($request){
    $order = new Order;
    $order->user_id = Auth::user()->id;
    $order->billing_name= $request->first_name.' '.$request->last_name;
    $order->order_tracking_id = 'ot-'.date("U");
    // $order->billing_address = $request->address;
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
}
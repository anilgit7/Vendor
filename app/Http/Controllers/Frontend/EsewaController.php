<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class EsewaController extends Controller
{
    public function success(Request $request)
    {
        if($request->oid && $request->amt &&$request->refId)
        {
            $order = Order::where('invoice_no',$request->oid)->first();
            if($order){
            $url = "https://uat.esewa.com.np/epay/transrec";
            $data =[
            'amt'=> $order->total,
            'rid'=> $request->refId,
            'pid'=> $order->invoice_no,
            'scd'=> 'epay_payment'
                 ];
            }

            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($curl);
            curl_close($curl);
            $response_code = $this->get_response('response_code',$response);
            if(trim($response_code) =='Success')
            {
                
                $user_email = Auth::user()->email;
                $carts = Cart::where('user_email', $user_email)->get()->all();
                foreach($carts as $cart){
                    $order->status= 1;
                    $order->product_name = $cart->product_name;
                    $order->product_image = $cart->product_image;
                    $order->price = $cart->price;
                    $order->quantity = $cart->quantity;
                    $order->merchant_email = $cart->merchant_email;
                    $order->user_email = $cart->user_email;
                    $order->delivery_status = 'accepted';
                    $order->save();
                }
                $user_email = Auth::user()->email;
                $carts = Cart::where('user_email', $user_email)->get()->all();
                foreach($carts as $cart){
                    $cart->delete();
                }
                return redirect()->route('payment.response')->with('success_message', 'Trasaction completed.');
            }
        }
    }
    public function failure()
    {
        return redirect()->route('payment.response')->with('failure_message', 'Transaction failed.');
    }
    //extract value from response code of verification of payment
    public function get_response($node, $xml)
    {
        if($xml==false){
        return false;
        }
        $found = preg_match('#<'.$node.'[?:\s+>]+)?>(.*?)'.'</'.$node.'>#s',$xml, $matches);
        if($found!= false){
            return $matches[1];
        }
        return false;
    }
    public function response()
    {
        return view('frontend.products');
    }

    public function initiatePayment()
    {
        $order_data = session()->get('order_data');
        $amount = $order_data['subtotal']; // Set your payment amount here
        $total_amount = $order_data['total'];
        $orderId = uniqid(); // Generate a unique order ID
        $signature = create_signature(
            "total_amount=$total_amount,transaction_uuid=$orderId,product_code=EPAYTEST"
        );
        $response = [
            'amount' => $amount,
            'product_delivery_charge' => $order_data['shipping_cost'],
            'product_service_charge' => 0,
            "product_code" => "EPAYTEST",
            'tax_amount' => $order_data['tax'],
            'total_amount' => $total_amount,
            'transaction_uuid' => $orderId,
            'signature' => $signature,
            "signed_field_names" => "total_amount,transaction_uuid,product_code",
            'success_url' => route('payment.callback'),
            'failure_url' => route('payment.callback'),
        ];


        session()->put('payment_data', $response);
        return redirect()->route('esewa.view');
        
    }

    public function paymentCallback(Request $request)
    {
        $data = $request->data;
        $decodedData = json_decode(base64_decode($data), true);
        if(empty($decodedData)){
            return redirect()->route('cart.index')->with(['error'=>true,'message' => 'Transaction failed']);
        }
        if ($decodedData['status'] !== 'COMPLETE') {
            return redirect()->route('cart.index')->with(['error'=>true,'message' => 'Transaction failed']);
        }
        else{
            create_esewa_order();
            return redirect()->route('cart.index')->with(['success'=>true,'message'=>'Order has been placed.']);
        }
    }
    public function esewa_view(){
        $paymentData = session()->get('payment_data');
        return view('frontend.esewa',['paymentData' => $paymentData]);
    }
}
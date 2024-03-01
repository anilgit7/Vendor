<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\Order_Item;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use App\Repositories\Interfaces\MerchantRepositoryInterface;

class MerchantController extends Controller
{
    private $merchantRepository;
    public function __construct(MerchantRepositoryInterface $merchantRepository){
        $this->merchantRepository = $merchantRepository;
    }
    public function index(){
        $title="merchant";
        return view('backend.merchant',compact('title'));
    }
    public function view_product(){
        $title="Product";
        $categories= $this->merchantRepository->get_category();
        $products= $this->merchantRepository->get_product();
        return view('backend.merchant',compact('title','categories','products'));
    }
    public function list_product(){
        $products = $this->merchantRepository->product_list();
        return response()->json(['products'=>$products]);
    }
    public function add_product(Request $request)
    {
        if(empty($request->product_size)){
            return response()->json(['message'=>"Size is required"]);
        }
        else{
            $product = $this->merchantRepository->create_product();
            $product->category_id = $request->product_category;
            $product->merchant_id = $request->merchant_id;
            $product->product_name = $request->product_name;
            $product->slug = create_slug($request->product_name);
            $product->price = $request->product_price;
            $product->description = $request->description;
            $product->color = $request->product_color;
            $product->size = implode(', ', $request->product_size);
            $product->material = $request->product_material;
            $product->brand = $request->product_brand;
            $product->weight = $request->product_weight;
            $product->warranty = $request->product_warranty;
            $image = $request->image;
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('images/backend/products',$imagename);
            $product->images = $imagename;
    
            $product->save();
            return response()->json(['message'=>'Product added successfully']);
        }
    }
    public function delete_product($id){
        $product = $this->merchantRepository->find_product($id);
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
                'error' => 'Prouduct not found',
            ]);
        }
    }
    public function edit_product($id){
        $product = $this->merchantRepository->find_product($id);
        if($product){
            return response()->json([
                'product' => $product
            ]);
        }
        else{
            return response()->json([
                'status' => '404',
                'message' => 'Product not found'
            ]);
        }
    }
    public function update_product(Request $request, $id){
        $product= $this->merchantRepository->find_product($id);
        if(empty($request->edit_product_size)){
            return response()->json(['message'=>'Please select a size']);
        }
        else{
            $product->product_name = $request->edit_product_name;
            $product->category_id = $request->edit_product_category;
            $product->description = $request->edit_description;
            $product->price = $request->edit_product_price;
            $product->color = $request->edit_product_color;
            $product->size = implode(', ', $request->edit_product_size);
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
    public function order(){
        $merchant_id = Auth::user()->id;
        $orders = Order::whereHas('orderItems.product', function ($query) use ($merchant_id) {
                $query->where('merchant_id', $merchant_id);
            })
            ->get();
        $title = "Orders";
        $orderItems = Order_Item::whereHas('product', function ($query) use ($merchant_id) {
                $query->where('merchant_id', $merchant_id);
            })
            ->whereIn('order_id', $orders->pluck('id')) // Fetch order items for all orders fetched above
            ->with('product') // Load the product information for each order item
            ->get();
        $subtotals = $orderItems->sum(function ($orderItem) {
            return $orderItem->quantity * $orderItem->product->price;
        });
    
        $taxrate = 0.01;
        $taxamount = $taxrate * $subtotals;
        $total = $subtotals + $taxamount;
        $shipped = $orderItems->isNotEmpty() ? $orderItems->first()->status : null;
        return view('backend.merchant', compact('title', 'orders', 'shipped','total'));
    }
    
    public function order_detail($order_tracking_id){
        $title = "Order Details";
        $merchant_id = Auth::user()->id;
    
        $order = Order::where('order_tracking_id', $order_tracking_id)->first();
        if (!$order) {
            return redirect()->back()->with(['error' => true, 'message' => 'Order not found']);
        }
    
        $orderItems = Order_Item::whereHas('product', function ($query) use ($merchant_id) {
                $query->where('merchant_id', $merchant_id);
            })
            ->where('order_id', $order->id)
            ->with('product') // Load the product information for each order item
            ->get();
    
        // Calculate subtotals, tax amount, and total
        $subtotals = $orderItems->sum(function ($orderItem) {
            return $orderItem->quantity * $orderItem->product->price;
        });
    
        $taxrate = 0.01;
        $taxamount = $taxrate * $subtotals;
        $total = $subtotals + $taxamount;
    
        return view('backend.merchant', compact('title', 'order', 'orderItems', 'subtotals', 'taxamount', 'total'));
    }
    

    public function order_status(Request $request, $id) {
        $order = Order::with('orderItems.product')->findOrFail($id);
        if ($request->delivery == 'pending') {
            return redirect()->route('merchant.order')->with(['success' => true, 'message' => 'No changes made.']);
        }
        if ($request->delivery == 'picked') {
            $merchant_id = Auth::user()->id;
            foreach ($order->orderItems as $orderItem) {
                if ($orderItem->product->merchant_id == $merchant_id) {
                    $orderItem->status = $request->delivery;
                    $orderItem->save();
                }
            }
            $pickedCount = $order->orderItems->where('status', 'picked')->count();
            if ($pickedCount == $order->orderItems->count()) {
                $order->delivery_status = 'processing';
            } else {
                $order->delivery_status = 'incomplete';
            }
            $order->save();
        }
        return redirect()->route('merchant.order')->with(['success' => true, 'message' => 'Status updated successfully']);
    }
    
}

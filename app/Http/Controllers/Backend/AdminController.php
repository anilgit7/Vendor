<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function index(){
        $title = 'dashboard';
        return view('backend.admin', compact('title'));
    }
    public function list_merchant(){
        $title = 'Unverified Merchant';
        $users = User::where('user_type', '1')->where('status', 'unverified')->get();
        return view('backend.admin', compact('title','users'));
    }
    public function new_list(){
        $users = User::where('user_type', '1')->where('status', 'unverified')->get();
        return response()->json(['users' => $users]);
    }
    public function new_merchant_delete($id){
        $new_merchant = User::find($id);
        if($new_merchant){
            $new_merchant_name =ucfirst($new_merchant->name);
            $new_merchant->delete();
            return response()->json(['message' => 'Merchant '.$new_merchant_name.' deleted successfully']);
        }
        else{
            return response()->json([
                'status' => '404',
                'error' => 'Merchant not found',
            ]);
        }
    }
    public function status_update(Request $request, $id){
        $merchant = User::find($id);
        if($merchant){
            $merchant_name =ucfirst($merchant->name);
            $merchant->status = $request->status;
            $merchant->update();
            return response()->json(['message' => 'Merchant '.$merchant_name.' verified successfully']);
        }
        else{
            return response()->json([
                'status' => '404',
                'error' => 'Merchant not found',
            ]);
        }
    }
    public function verify_merchant(){
        $title = 'Verified Merchant';
        return view('backend.admin', compact('title'));
    }
    public function list_customer(){
        $title = 'customer';
        return view('backend.admin', compact('title'));
    }
    public function category(){
        $categories = Category::get()->all();
        $title = 'category';
        return view('backend.admin', compact('categories', 'title'));
    }
    public function add_category(Request $request){
        if(Category::where('category_name', $request->category_name)->exists()){
            return response()->json([
                'status' => '400',
                'error' => 'Category '.$request->category_name.' already exists',
            ]);
        }
        else{
            $category = new Category;
            $category_name = $category->category_name = ucfirst($request->category_name);
            $image = $request->category_image;
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->category_image->move('images/backend/category',$imagename);
            $category->image = $imagename;
            $category->save();
            return response()->json(['message' => 'Category '.$category_name. ' created successfully']);
        }
    }
    public function view_category(){
        $categories = Category::get()->all();
        return response()->json(['categories'=>$categories]);
    }
    public function edit_category($id){
        $category = Category::find($id);
        if($category){
            return response()->json([
                'category' => $category
            ]);
        }
        else{
            return response()->json([
                'status' => '404',
                'message' => 'Category not found'
            ]);
        }
    }
    public function update_category(Request $request, $id){
        $category= Category::find($id);
        $previousName = $category->category_name;
        if($previousName == $request->edit_category_name){
            if($request->edit_category_image){
                $category_image = $category->image;
                $image_path = 'images/backend/category/'.$category_image;
                if (File::exists($image_path)){
                    File::delete($image_path);
                }
                $image = $request->edit_category_image;
                $imagename = time().'.'.$image->getClientOriginalExtension();
                $request->edit_category_image->move('images/backend/category',$imagename);
                $category->image = $imagename;
                $category->update();
                return response()->json(['message' => 'Category updated successfully']);
            }
            else{
                return response()->json(['message' => 'No changes made']);
            }
        }
        elseif(Category::where('category_name', $request->edit_category_name)->exists()){
            return response()->json([
                'status' => '400',
                'message' => 'Category '.$request->edit_category_name.' already exists',
            ]);
        }
        else{
            $category->category_name = $request->edit_category_name;
            $category_image = $category->image;
            if($request->edit_category_image){
                $image_path = 'images/backend/category/'.$category_image;
                if (File::exists($image_path)){
                    File::delete($image_path);
                }
                $image = $request->edit_category_image;
                $imagename = time().'.'.$image->getClientOriginalExtension();
                $request->edit_category_image->move('images/backend/category',$imagename);
                $category->image = $imagename;
            }
            $category->update();

            $products = Product::where('category', $previousName)->get()->all();
            foreach($products as $product){
                $product->category = $request->edit_category_name;
                $product->update();
            }
            return response()->json(['message' => 'Category updated successfully']);
        }
    }
    public function delete_category($id){
        $category = Category::find($id);
        if($category){
            $category_image = $category->image;
            $category_name =$category->category_name;
            $category->delete();
            $image_path = 'images/backend/category/'.$category_image; 
            if (File::exists($image_path)){
                File::delete($image_path);
            }
            if(Product::where('category', $category_name)->exists()){
                $products = Product::where('category', $category_name)->get()->all();
                foreach($products as $product){
                    $list_image = $product->image;
                    $product->delete();
                    $image_path = 'images/backend/products/'.$list_image;
                    if (File::exists($image_path)) {
                        File::delete($image_path);
                    }
                }
            }
            return response()->json(['message' => 'Category '.$category_name.' deleted successfully']);
        }
        else{
            return response()->json([
                'status' => '404',
                'error' => 'Category not found',
            ]);
        }
    }
}

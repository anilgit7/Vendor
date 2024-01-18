<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        if(Category::where('category_name', $request->edit_category_name)->exists()){
            return response()->json([
                'status' => '400',
                'message' => 'Category '.$request->edit_category_name.' already exists',
            ]);
        }
        else{
            $category= Category::find($id);
            $category->category_name = $request->edit_category_name;
            $category->update();
            return response()->json(['message' => 'Category updated successfully']);
        }
    }
    public function delete_category($id){
        $category = Category::find($id);
        if($category){
            $category_name =$category->category_name;
            $category->delete();
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

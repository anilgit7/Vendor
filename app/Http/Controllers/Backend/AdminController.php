<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index(){
        $title = 'dashboard';
        return view('backend.admin', compact('title'));
    }
    public function list_merchant(){
        $title = 'merchant';
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
                'message' => 'Category '.$request->category_name.' already exists',
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
        $category_name =$category->category_name;
        $category->delete();
        return response()->json(['message' => 'Category '.$category_name.' deleted successfully']);
    }
}

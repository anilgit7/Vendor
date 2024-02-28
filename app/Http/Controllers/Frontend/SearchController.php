<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
        if ($request->ajax()) {
            $searches = Product::whereHas('category', function($query) use ($request) {
                $query->where('category_name', 'like', '%' . $request->search . '%');
            })
            ->orWhere('id', 'like', '%' . $request->search . '%')
            ->orWhere('product_name', 'like', '%' . $request->search . '%')
            ->get();
    
            if (!empty($searches)) {
                return response()->json(['search' => $searches]);
            }
        }
        return response()->json([
            'status' => '404',
            'error' => 'No result found',
        ]);
    }
    
    public function remove_search(Request $request){
    
        $output ='';
        return $output;
    }
    
    public function result_page(Request $request){
        $search_name = ucfirst($request->search);
        $searches=Product::whereHas('category',function($query) use ($request){
                $query->where('category_name','like','%'.$request->search.'%');
            })
            ->orwhere('id','like','%'.$request->search.'%')
            ->orwhere('product_name','like','%'.$request->search.'%')
            ->get();
        return view('frontend.product',compact('searches','search_name'));
    }
}

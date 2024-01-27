<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){

        if($request->ajax()){
            $searches=Product::where('id','like','%'.$request->search.'%')
            ->orwhere('product_name','like','%'.$request->search.'%')
            ->orwhere('category','like','%'.$request->search.'%')->get();
            $output='';
            if($searches){
                return response()->json(['search' => $searches]);
            }
            else{
                return response()->json([
                    'status' => '404',
                    'error' => 'No result found',
                ]);
            }    
        }
        else{
            return response()->json([
                'status' => '404',
                'error' => 'No result found',
            ]);
        }
    
    
    
      }
    
      public function remove_search(Request $request){
        
            $output ='';
            return $output;
      }
    
      public function result_page(Request $request){
        $search_name = ucfirst($request->search);
        $searches=Product::where('id','like','%'.$request->search.'%')
            ->orwhere('product_name','like','%'.$request->search.'%')
            ->orwhere('category','like','%'.$request->search.'%')->get();
        return view('frontend.product',compact('searches','search_name'));
      }
}

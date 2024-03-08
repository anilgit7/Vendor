<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Rating;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    public function creation(Request $request){
        $rating = new Rating;
        $rating->product_id = $request->product_id;
        $rating->user_id = $request->user_id;
        $rating->description = $request->description;
        $rating->save();
        return response()->json(['success' => true, 'message' => 'Rating send successfully.']);
    }
    public function list_rating(){
        $title = 'Reviews';
        $merchant_id = Auth::user()->id;
        $products = User::find($merchant_id)->product;
        $product_id = $products->pluck('id');
        $ratings = Rating::whereIn('product_id',$product_id)->get();
        return view('backend.merchant',compact('title','ratings'));
    }

    public function update_status(Request $request,$id){
        if($request->status == 'hide' || $request->status == 'show'){
            $rating = Rating::find($id);
            $rating->status = $request->status;
            $rating->save();
            return redirect()->back()->with(['success'=>true,'message'=>'Status updated successfully.']);
        }
        else{
            return redirect()->back()->with(['error'=> true,'message' => 'Invalid status.']);
        }
    }
}

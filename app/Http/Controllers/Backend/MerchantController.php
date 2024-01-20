<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class MerchantController extends Controller
{
    public function index(){
        $title="merchant";
        return view('backend.merchant',compact('title'));
    }
    public function view_product(){
        $title="Product";
        $categories=Category::get()->all();
        return view('backend.merchant',compact('title','categories'));
    }
}

<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MerchantController extends Controller
{
    public function index(){
        $title="merchant";
        return view('backend.merchant',compact('title'));
    }
}

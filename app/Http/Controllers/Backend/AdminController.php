<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('backend.admin');
    }

    public function list_merchant(){
        return view('backend.admin');
    }

    public function list_customer(){
        return view('backend.admin');
    }
    public function category(){
        return view('backend.admin');
    }
}

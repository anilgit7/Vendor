<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\MerchantController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

route::get('/',[HomeController::class, 'index'])->name('home');
route::get('/logout',[HomeController::class,'logout'])->name('logout');
route::get('/userchecking',[HomeController::class,'userfront']);

/***********************************Admin ROute***************************************** */
route::group(['prefix'=>'admin','middleware'=>'admin'],function(){
    route::get('/dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    route::group(['prefix'=> 'merchant'],function(){
        route::get('/list_user',[AdminController::class,'list_merchant'])->name('admin.merchant.list');
    });
    route::group(['prefix'=> 'customer'],function(){
        route::get('/list_user',[AdminController::class,'list_customer'])->name('admin.customer.list');
    });
});

/***********************************Merchant ROute***************************************** */
route::group(['prefix'=>'merchant'],function(){
    route::get('/dashboard',[MerchantController::class,'index'])->name('merchant.dashboard');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

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

/********************************** Public Route ****************************************/
route::get('/userchecking',[HomeController::class,'userfront']);
route::get('/logout',[HomeController::class,'logout'])->name('logout');

/********************************** Customer Route ****************************************/
route::group(['middleware' => 'customer'], function(){
    route::get('/',[HomeController::class, 'index'])->name('home');
});

/*********************************** Admin Route ******************************************/
route::group(['prefix'=>'admin','middleware'=>'admin'],function(){
    route::get('/dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    route::group(['prefix'=> 'merchant'],function(){
        route::get('/new-merchant',[AdminController::class,'list_merchant'])->name('admin.merchant.new');
        route::get('/new-list',[AdminController::class,'new_list'])->name('admin.merchant.new.list');
        route::post('/new-list/status-update/{id}',[AdminController::class, 'status_update'])->name('admin.merchant.new.update');
        route::get('/new_merchant/delete/{id}',[AdminController::class,'new_merchant_delete'])->name('admin.merchant.new.delete');
        route::get('/verified-merchant',[AdminController::class, 'verify_merchant'])->name('admin.merchant.verify');
    });
    route::group(['prefix'=> 'customer'],function(){
        route::get('/list_user',[AdminController::class,'list_customer'])->name('admin.customer.list');
    });
    route::get('/categories',[AdminController::class, 'category'])->name('admin.category');
    route::get('/view-categories',[AdminController::class, 'view_category'])->name('admin.category.view');
    route::post('/add-category',[AdminController::class, 'add_category'])->name('admin.category.add');
    route::get('/edit-category/{id}',[AdminController::class, 'edit_category'])->name('admin.category.edit');
    route::post('/update-category/{id}',[AdminController::class, 'update_category'])->name('admin.category.update');
    route::get('/delete-category/{id}',[AdminController::class, 'delete_category'])->name('admin.category.delete');
});

/*********************************** Merchant Route ******************************************/
route::group(['prefix'=>'merchant','middleware'=>'merchant'],function(){
    route::get('/dashboard',[MerchantController::class,'index'])->name('merchant.dashboard');
    route::group(['prefix'=>'product'],function(){
        route::get('/new-product',[MerchantController::class,'list_product'])->name('merchant.product.new');
        route::get('/view-product',[MerchantController::class, 'view_product'])->name('merchant.product');
        route::post('/add-product', [MerchantController::class, 'add_product'])->name('product.add');
        route::get('/edit-product/{id}',[MerchantController::class, 'edit_product'])->name('product.edit');
        route::post('/update-product/{id}',[MerchantController::class, 'update_product'])->name('product.update');
        route::get('/delete-product/{id}', [MerchantController::class, 'delete_product'])->name('product.delete');
    });
});
// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

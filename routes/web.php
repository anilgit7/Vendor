<?php

use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\OrderController;
use App\Http\Controllers\Frontend\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\MerchantController;
use App\Http\Controllers\Frontend\EsewaController;
use App\Http\Controllers\Frontend\SearchController;
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
route::get('/merchant-register', function(){
    return view('auth.merchant_register');
})->name('merchant.register')->middleware('logout');
route::get('/logout',[HomeController::class,'logout'])->name('logout');

/********************************** Customer Route ****************************************/
route::group(['middleware' => 'customer'], function(){
    route::get('/',[HomeController::class, 'index'])->name('home');
    route::get('/cart',[CartController::class,'index'])->name('cart.index');
    route::post('/add-to-cart', [CartController::class,'addToCart'])->name('cart.add');
    route::post('/cart/update/{id}',[CartController::class,'update'])->name('cart.update');
    route::get('/delete/{id}',[CartController::class,'delete'])->name('cart.delete');
    route::get('/delete-all',[CartController::class,'delete_all'])->name('cart.delete.all');
    route::get('/checkout',[OrderController::class, 'checkout'])->name('order.checkout');
    route::post('/order',[OrderController::class, 'order'])->name('order')->middleware('auth');
    route::group(['prefix' => 'search'], function(){
        route::get('/search', [SearchController::class, 'search'])->name('search');
        route::get('/remove-search', [SearchController::class, 'remove_search'])->name('remove.search');
        route::get('/result-page',[SearchController::class, 'result_page'])->name('result.page');
    });
    route::get('/{category:slug}',[ProductController::class, 'list_product'])->name('product.list');
    route::group(['prefix' => 'product'], function () {
        route::get('/list',[ProductController::class, 'list_product'])->name('products.list');
        route::get('/details/{product:slug}',[ProductController::class, 'product_detail'])->name('product.detail');
        route::group(['middleware' => 'auth'], function(){
            route::post('/order',[ProductController::class,'order'])->name('product.order');
            // route::post('/list/{id}/cart',[ProductController::class, 'cart'])->name('product.cart');
            route::post('/list/buy/{id}/cart',[ProductController::class, 'buy_now'])->name('buy.now');
            route::get('/checkout/success',[EsewaController::class, 'success'])->name('esewa.success');
            route::get('/checkout/failure',[EsewaController::class, 'failure'])->name('esewa.failure');
            route::get('/payment/response',[EsewaController::class, 'response'])->name('payment.response');
            route::get('/checkout',[ProductController::class, 'checkout'])->name('products.checkout');
        });
    });
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
        route::get('/verified-list',[AdminController::class,'verified_list'])->name('admin.merchant.verified.list');
        route::get('/verified_merchant/delete/{id}',[AdminController::class,'verified_merchant_delete'])->name('admin.merchant.verified.delete');
    });
    route::group(['prefix'=> 'customer'],function(){
        route::get('/list_user',[AdminController::class,'list_customer'])->name('admin.customer.list');
        route::get('/delete/user/{id}',[AdminController::class,'delete_customer'])->name('admin.customer.delete');
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

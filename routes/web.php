<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactUsController;
use App\Models\Order;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



Route::controller(ItemController::class)->group(function () {
    Route::get('discover/{id}','discover')->name('items.discover');
    Route::get('/',  'index')->name('items.index');
    Route::get('/products','show')->name('items.show');
    Route::get('/dashboard',  'view')->name('dashboard');
    // add items
    Route::post('/dashboard',  'store')->name('items.store');
    // delete item 
    Route::delete('/items/{item}',  'destroy')->name('items.destroy');
    // edit item 
    Route::get('/items/{item}/edit', 'edit')->name('items.edit');
    // update item 
    Route::put('/items/{item}/update', 'update')->name('items.update');
    });


    // Categories Routes
Route::controller(CategoryController::class)->group(function () {
    // Route::get('/dashboard','index')->name('categories.index');
    // // add category
    Route::post('/create', 'store')->name('categories.store');
    // // delete category 
    Route::delete('/categories/{category}',  'destroy')->name('categories.destroy');
    // // edit category 
    Route::get('/categories/{category}/edit', 'edit')->name('categories.edit');
    // // update category 
    Route::put('/categories/{category}/update', 'update')->name('categories.update');
    });
  
    Route::controller(ContactUsController::class)->group(function(){
        Route::get('/contactUs','index')->name('contact.index');
        Route::get('/contact','view')->name('contact-us.view');
        Route::post('/store', 'store')->name('message.store');
    });


    route::post('/addcart/{id}',[CartController::class,'addcart'])->middleware('auth:sanctum');
    route::get('/showcart',[CartController::class,'showcart'])->name('showcart');
    Route::post('update-cart', [CartController::class, 'updateCart'])->name('update.cart'); 
    Route::delete('{cart}', [CartController::class, 'destroy'])->name('cart.destroy'); 


    Route::get('checkout',[CheckoutController::class,'index'])->name('checkout.index');
    
    Route::get('orders',[OrderController::class,'index']);
    Route::get('orders/{orderId}',[OrderController::class,'show']);


    Route::get('admin-orders',[App\Http\Controllers\Admin\OrderController::class ,'index'])->name('orders.index');
    Route::get('admin-orders/{order}',[App\Http\Controllers\Admin\OrderController::class ,'show'])->name('orders.show');
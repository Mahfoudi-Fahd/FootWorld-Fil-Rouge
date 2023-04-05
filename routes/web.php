<?php

use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;

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



Route::get('/', [ItemController::class, 'index'])->name('items.index');
Route::get('/products',[ItemController::class,'show'])->name('items.show');

Route::get('/dashboard', [ItemController::class, 'view'])->name('dashboard');

// add items
Route::post('/dashboard', [ItemController::class, 'store'])->name('items.store');

// delete item 
Route::delete('/items/{item}', [ItemController::class, 'destroy'])->name('items.destroy');

// edit item 
Route::get('/items/{item}/edit', [ItemController::class,'edit'])->name('items.edit');


// update item 
Route::get('/items/{item}/update', [ItemController::class,'update'])->name('items.update');


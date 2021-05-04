<?php

use App\Http\Controllers\CustomController;
use App\Http\Controllers\ProductController;
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
    return redirect()->route('products.index');
    // return view('welcome');
});

Route::resource('product', 'ProductController')->names('products');

Route::prefix('products')->group(function () {
    Route::get('/like/{product}',  [ProductController::class, 'isLiked'])->name('products.like');
    Route::get('/trash/',  [CustomController::class, 'trash'])->name('products.trash');
    Route::get('/show-trashed/{product_id}',  [CustomController::class, 'showTrashed'])->name('products.showTrashed');
    Route::get('/{product}/restore',  [CustomController::class, 'restore'])->name('products.restore');
    Route::get('/destroy-permanently/{product}',  [CustomController::class, 'destroyPermanent'])->name('products.destroyPermanent');
    Route::get('/search/',  [ProductController::class, 'search'])->name('products.search');
});

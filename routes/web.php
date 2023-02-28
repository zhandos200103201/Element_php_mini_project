<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::resource(    'products',ProductController::class)->withTrashed();

Route::get("products/{product}/restore", [ProductController::class, 'restore'])->withTrashed()->name('products.restore');

Route::get('/', function () {
    return view('index');
});
//
//Route::get('/products', function (){
//    return view('products', ['products' => Product::all()]);
//});
//
//Route::get('/products/{product}', function (Product $product){
//    return view('product', ['product' => $product]);
//});

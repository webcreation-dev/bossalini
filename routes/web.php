<?php

use App\Http\Livewire\AddCart;
use App\Http\Livewire\Home;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ProductsByCategory;
use App\Http\Livewire\SingleProduct;
use App\Http\Livewire\Wishlist;
use App\Models\Product;

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
    $product_id = [];
    for ($i = 0; $i < 4; $i++) {
        $product_id[] = rand(1, 9);
    }

    $products = Product::whereIn('id', $product_id)->get();
    return view('home', compact('products'));
});



Route::get('/shop_all', function () {
    return view('shop_all');
});


Route::get('/', Home::class)->name('home');
Route::get('/get_products_by_categories', ProductsByCategory::class)->name('get_products_by_categories');
Route::get('/wishlists', Wishlist::class)->name('wishlists');
Route::get('/single_product', SingleProduct::class)->name('single_product');
Route::get('/add_cart', AddCart::class)->name('add_cart');

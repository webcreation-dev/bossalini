<?php

use App\Http\Livewire\Checkout;
use App\Http\Controllers\CurrencyController;
use App\Http\Livewire\Account;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\AddCart;
use App\Http\Livewire\Addresse;
use App\Http\Livewire\Home;
use App\Http\Livewire\ProductsByCategory;
use App\Http\Livewire\Shop;
use App\Http\Livewire\SingleProduct;
use App\Http\Livewire\Wishlist;

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


Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/lookbook', function () {
    return view('lookbook');
})->name('lookbook');


Route::get('/overview', function () {
    return view('overview');
})->name('overview');

require __DIR__.'/auth.php';


Route::get('/', Home::class)->name('home');
Route::get('/get_products_by_categories', ProductsByCategory::class)->name('get_products_by_categories');
Route::get('/wishlists', Wishlist::class)->name('wishlists');
Route::get('/single_product', SingleProduct::class)->name('single_product');
Route::get('/add_cart', AddCart::class)->name('add_cart');
Route::get('/shop', Shop::class)->name('shop');
Route::get('/account', Account::class)->name('account');
Route::get('/profile', Addresse::class)->name('addresse');


Route::get('/change_currency', [CurrencyController::class, 'index'])->name('change_currency');
Route::post('/get_data_cart', [CurrencyController::class, 'getDataCart'])->name('get_data_cart');
Route::get('/remove_item_checkout', [CurrencyController::class, 'removeItemCheckout'])->name('remove_item_checkout');
Route::get('/checkout', Checkout::class)->name('checkout');

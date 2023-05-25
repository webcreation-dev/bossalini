<?php

use App\Http\Livewire\Checkout;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\PaymentController;
use App\Http\Livewire\Account;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\AddCart;
use App\Http\Livewire\Addresse;
use App\Http\Livewire\Home;
use App\Http\Livewire\ProductsByCategory;
use App\Http\Livewire\Shop;
use App\Http\Livewire\SingleProduct;
use App\Http\Livewire\Wishlist;
use App\Models\OrderItem;

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
    session()->put('titre', "ABOUT US | BOSSALINI");
    return view('about');
})->name('about');

Route::get('/faq', function () {
    session()->put('titre', "FAQ | BOSSALINI");
    return view('faq');
})->name('faq');

Route::get('/returns', function () {
    session()->put('titre', "RETURNS/EXCHANGES | BOSSALINI");
    return view('returns');
})->name('returns');

Route::get('/shipping', function () {
    session()->put('titre', "SHIPPING | BOSSALINI");
    return view('shipping');
})->name('shipping');

Route::get('/terms', function () {
    session()->put('titre', "TERMS | BOSSALINI");
    return view('terms');
})->name('terms');

Route::get('/privacy', function () {
    session()->put('titre', "PRIVACY | BOSSALINI");
    return view('privacy');
})->name('privacy');

Route::get('/media', function () {
    session()->put('titre', "MEDIA | BOSSALINI");
    return view('media');
})->name('media');

Route::get('/bossalini_radio', function () {
    session()->put('titre', "Bossalini Radio | BOSSALINI");
    return view('playlist');
})->name('playlist');

Route::get('/contact', function () {
    session()->put('titre', "CONTACT | BOSSALINI");
    return view('contact');
})->name('contact');

Route::get('/lookbook', function () {
    session()->put('titre', "LOOKBOOK | BOSSALINI");
    return view('lookbook');
})->name('lookbook');

require __DIR__.'/auth.php';

Route::get('/email_order', function () {
    $order_items = OrderItem::where('order_id', 10)->get();
    return view('mail.order-details', compact('order_items'));
});


Route::get('/', Home::class)->name('home');
Route::get('/shop', Shop::class)->name('shop');
Route::get('/account', Account::class)->name('account');
Route::get('/profile', Addresse::class)->name('addresse');
Route::get('/add_cart', AddCart::class)->name('add_cart');
Route::get('/checkout', Checkout::class)->name('checkout');
Route::get('/wishlists', Wishlist::class)->name('wishlists');
Route::get('/single_product/{product_id}', SingleProduct::class)->name('single_product');
Route::get('/get_products_by_categories/{slug}', ProductsByCategory::class)->name('get_products_by_categories');


Route::post('/pay', [PaymentController::class,'pay'])->name('paypal.pay');
Route::get('/error/{order_id}', [PaymentController::class,'error'])->name('paypal.error');
Route::get('/success/{order_id}', [PaymentController::class,'success'])->name('paypal.success');


Route::get('/change_currency', [CurrencyController::class, 'index'])->name('change_currency');
Route::post('/get_data_cart', [CurrencyController::class, 'getDataCart'])->name('get_data_cart');
Route::get('/overview', [CurrencyController::class, 'getOverview'])->name('overview');
Route::post('/save_notification', [CurrencyController::class, 'saveNotification'])->name('save.notification');
Route::post('/subscribe_newsletter', [CurrencyController::class, 'subscribeNewsletter'])->name('subscribe.newsletter');

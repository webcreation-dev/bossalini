<?php
use App\Models\Cart;
use App\Models\Currency;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

define("ADDRESS", "adderss");
define("FORMADDRESS", "form_address");

function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
  }


function getNumberProductCart() {

    if (!Auth::check()) {
        $cart = session()->get('cart');
        if (!$cart) {

            return 0;
        } else {

            return count($cart);
        }
    } else {

        $cart = Cart::where('user_id', Auth::user()->id)->get();
        return count($cart);
    }
}

function getImageCurrency() {

    $currency = session()->get('currency');

    if (!$currency) {

        $currency = '€';
        session()->put('currency', $currency);
        return 'flag-eur.eb1348a4.svg';
    } elseif ($currency == '€') {

        return 'flag-eur.eb1348a4.svg';
    } elseif ($currency == 'CHF') {

        return 'flag-swz.dc144f59.svg';
    } elseif ($currency == '£') {

        return 'flag-uk.3248720d.svg';
    } else {

        return 'flag-usa.1c85eb67.svg';
    }

}

function getCodeCurrency() {

    $currency = session()->get('currency');

    if (!$currency) {

        $currency = '€';
        return $currency;
    } else {

        return $currency;
    }

}

function getNumberProduct($id) {

    if(Auth::check()) {
        $cart_items = Cart::where('user_id', Auth::user()->id)->where('status', 'unpaid')->first()->get()->toArray();
        $number = $cart_items[0]['quantity'];
    }else {
        $cart_items = session()->get('cart_items');
        $number = $cart_items[$id]['quantity'];
    }
    return $number;
}

function getTotalPrice($id) {

        if(Auth::check()) {
            $cart_items = Cart::where('user_id', Auth::user()->id)->where('status', 'unpaid')->first()->get()->toArray();
            $number = $cart_items[0]['quantity'];

            $product = Product::find($id);
            $total_price = $number * $product->original_price;
        }else {
            $cart_items = session()->get('cart_items');
            $number = $cart_items[$id]['quantity'];

            $product = Product::find($id);
            $total_price = $number * $product->original_price;
        }
        return $total_price;
}

function getUserImageCurrency() {
    $currency = Currency::where('id', Auth::user()->currency_id)->first();
    return $currency->image;
}

function getUserCurrency() {
    $currency = Currency::where('id', Auth::user()->currency_id)->first();
    return $currency->code;
}

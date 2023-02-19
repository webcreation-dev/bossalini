<?php
use App\Models\Cart;
use App\Models\ColorProduct;
use App\Models\Currency;
use App\Models\Product;
use App\Models\Size;
use App\Models\SizeProduct;
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
            $count = 0;
            foreach ($cart as $item) {
                if ($item['status'] == 'unpaid') {
                    $count++;
                }
            }
            return $count;
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

function getNameCurrency() {

    $currency = session()->get('currency');

    if (!$currency) {

        $currency = '€';
        session()->put('currency', $currency);
        return 'EUROPEAN';
    } elseif ($currency == '€') {

        return 'EUROPEAN';
    } elseif ($currency == 'CHF') {

        return 'SWITZERLAND';
    } elseif ($currency == '£') {

        return 'UNITED KINGDOM';
    } else {

        return 'USA / REST OF THE WORLD';
    }

}

function getColorSelectProduct($id, $color) {

    $color_select = false;

    if(Auth::check()) {

        $product = Cart::where('product_id', $id)->where('color', $color);
        if(!($product->count() > 0)) {
            $color_select = true;
        }

    }else {

        $cart_items = session()->get('cart');

        foreach ($cart_items as $key => $item) {
            if ($item['id'] == $id && $item['color'] == $color) {
                $color_select = true;
            }
        }
    }
    return $color_select;
}

function getButtonAddCart($id) {

    $button_add_cart = false;

    if(Auth::check()) {

        $check_color_product = ColorProduct::where('product_id', $id)->count();
        $check_size_product = SizeProduct::where('product_id', $id)->count();


        if($check_color_product == 0 && $check_size_product > 0) {

            $product = Cart::where('product_id', $id)->whereNotNull('size');
            if($product->count() > 0) {
                $button_add_cart = true;
            }
        }elseif($check_color_product > 0 && $check_size_product == 0) {
            $product = Cart::where('product_id', $id)->whereNotNull('color');
            if($product->count() > 0) {
                $button_add_cart = true;
            }

        }elseif($check_color_product > 0 && $check_size_product > 0) {
            $product = Cart::where('product_id', $id)->whereNotNull('size')->whereNotNull('color');
            if($product->count() > 0) {
                $button_add_cart = true;
            }

        }

    }else {

        $cart_items = session()->get('cart');

        $check_color_product = ColorProduct::where('product_id', $id)->count();
        $check_size_product = SizeProduct::where('product_id', $id)->count();


        if($check_color_product == 0 && $check_size_product > 0) {

            foreach ($cart_items as $key => $item) {
                if ($item['id'] == $id && $item['size'] != "") {
                    $button_add_cart = true;
                }
            }
        }elseif($check_color_product > 0 && $check_size_product == 0) {
            foreach ($cart_items as $key => $item) {
                if ($item['id'] == $id && $item['color'] != "") {
                    $button_add_cart = true;
                }
            }

        }elseif($check_color_product > 0 && $check_size_product > 0) {
            foreach ($cart_items as $key => $item) {
                if ($item['id'] == $id && $item['color'] != "" && $item['size'] != "") {
                    $button_add_cart = true;
                }
            }

        }
    }
    return $button_add_cart;

}

/*function getColorDefaultProduct($id, $color) {

    $color_default = false;

    if(Auth::check()) {

        $product = Cart::where('product_id', $id)->where('color', '#F4ECDD');
        if(!($product->count() == 0)) {
            $color_default = true;
        }
    }else {

        $cart_items = session()->get('cart');

        if($color =="#F4ECDD") {
            if($cart_items == []) {
                $color_default = true;
            }else {
                foreach ($cart_items as $key => $item) {
                    if ($item['id'] != $id) {
                        $color_default = true;
                    }else {
                        $color_default = false;
                        break;
                    }
                }

                foreach ($cart_items as $key => $item) {
                    if($item['id'] == $id ) {
                        if($item['color'] != "") {
                            $color_default = false;
                        }else {
                            $color_default = true;
                        }
                    }
                }
            }
        }
    }
    return $color_default;
}*/

function getSizeSelectProduct($id, $size) {

    $size_select = false;

    if(Auth::check()) {

        $product = Cart::where('product_id', $id)->where('size', $size);
        if(!($product->count() > 0)) {
            $size_select = true;
        }
    }else {

        $cart_items = session()->get('cart');
        foreach ($cart_items as $key => $item) {
            if ($item['id'] == $id && $item['size'] == $size) {
                $size_select = true;
            }
        }
    }
    return $size_select;
}

function getSizeDefaultProduct($id) {

    $size_default = false;

    if(Auth::check()) {

        $product = Cart::where('product_id', $id);
        if(!($product->count() == 0)) {
            $size_default = true;
        }
    }else {

        $cart_items = session()->get('cart');

        if($cart_items == []) {
            $size_default = true;
        }else {
            foreach ($cart_items as $key => $item) {
                if ($item['id'] != $id) {
                    $size_default = true;
                }else {
                    $size_default = false;
                    break;
                }
            }

            foreach ($cart_items as $key => $item) {
                if($item['id'] == $id ) {
                    if($item['size'] != "") {
                        $size_default = false;
                    }else {
                        $size_default = true;
                    }
                }
            }
        }

    }

    return $size_default;
}

function getCodeCurrency() {

    $currency = session()->get('currency');

    if (!$currency) {

        $currency = '$';
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

            $total_price = $number * getPriceProduct($id);
        }else {
            $cart_items = session()->get('cart_items');
            $number = $cart_items[$id]['quantity'];

            $total_price = $number * getPriceProduct($id);
        }
        return $total_price;
}

function getUserImageCurrency() {
    $currency = Currency::where('id', Auth::user()->currency_id)->first();
    return $currency->image;
}

function getUserNameCurrency() {
    $currency = Currency::where('id', Auth::user()->currency_id)->first();

    $currency = $currency->code;

    if ($currency == '€') {

        return 'EUROPEAN';
    } elseif ($currency == 'CHF') {

        return 'SWITZERLAND';
    } elseif ($currency == '£') {

        return 'UNITED KINGDOM';
    } else {

        return 'USA / REST OF THE WORLD';
    }

    return $currency->image;
}

function getUserCurrency() {
    $currency = Currency::where('id', Auth::user()->currency_id)->first();
    return $currency->code;
}

function checkStockSizeProduct($id, $size) {
    $stock = true;
    $sizeProduct = SizeProduct::where('product_id', $id)->where('size_id', $size)->first();
    $stock = ($sizeProduct->quantity > 0) ? true : false;
    return $stock;
}

function checkStockColorProduct($id, $color) {
    $stock = true;
    $sizeProduct = ColorProduct::where('product_id', $id)->where('color_id', $color)->first();
    $stock = ($sizeProduct->quantity > 0) ? true : false;
    return $stock;
}

function getRateCurrency() {

    $currency = session()->get('currency');
    $rate = 'USD';

    if ($currency == '€') {
        $rate = 'EUR';
    }elseif($currency == 'CHF') {
        $rate = 'CHF';
    }elseif($currency == '£') {
        $rate = 'GBP';
    } else {
        $rate = 'USD';
    }

    return $rate;
}

function getUserRateCurrency() {
    $currency = Currency::where('id', Auth::user()->currency_id)->first();
    return $currency->rate;
}

function getConvertRatePrice($rate, $price) {
    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.apilayer.com/exchangerates_data/convert?to=$rate&from=USD&amount=$price",
    CURLOPT_HTTPHEADER => array(
        "Content-Type: text/plain",
        "apikey: 8dYXIkvfiId7KmWDFTuf2yUSqt0DVg6L"
    ),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET"
    ));

    $response = curl_exec($curl);
    curl_close($curl);
    $response = json_decode($response, true);
    // return round($response['result'], 2);
    return 77;
}

function getPriceProduct($id) {

    $product = Product::find($id);
    $price = "";
    $check_size_product = SizeProduct::where('product_id', $id)->count();


    if($check_size_product == 0) {
        $price = $product->selling_price;
    }else {

        if(Auth::check()) {

            $products_cart = Cart::where('product_id', $id);
            if(!($products_cart->count() == 0)) {
                if($products_cart->size != "") {
                    $size_id = Size::where('name', $products_cart->size)->first()->get(['id'])->toArray();
                    $price_product = SizeProduct::where('product_id', $id)->where('size_id', $size_id)->first();
                    $price = $price_product->price;
                }else {
                    $price = $product->selling_price;
                }
            }else {
                $price = $product->selling_price;
            }
        }else {

            $cart_items = session()->get('cart');

            if($cart_items == []) {
                $price = $product->selling_price;
            }else {
                foreach ($cart_items as $key => $item) {
                    if ($item['id'] != $id) {
                        $price = $product->selling_price;
                    }else {
                        if($item['size'] == "") {
                            $price = $product->selling_price;
                        }else {
                            $size_id = Size::where('name', $item['size'])->get(['id'])->toArray();
                            $price_product = SizeProduct::where('product_id', $id)->where('size_id', $size_id[0]['id'])->first();
                            $price = $price_product->price;
                            break;
                        }
                    }
                }

            }

        }
    return $price;

    }

}

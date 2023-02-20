<?php
use App\Models\Cart;
use App\Models\Color;
use App\Models\Currency;
use App\Models\Product;
use App\Models\Size;
use App\Models\SizesColorsProducts;
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

        $cart = Cart::where('user_id', Auth::user()->id)->where('status', 'unpaid')->get();
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
        if($product->count() > 0) {
            $color_select = true;
        }
    }
    else {

        $cart_items = session()->get('cart');

        foreach ($cart_items as $key => $item) {
            if ($item['id'] == $id &&   $color == $item['color']) {

                $color_select = true;
            }
        }

    }

    return $color_select;
}

function getButtonAddCart($id) {

    $button_add_cart = false;

    $product_simple = SizesColorsProducts::where('product_id', $id)->where('color_id', "")->where('size_id', "")->count();
    $product_sizes = SizesColorsProducts::where('product_id', $id)->where('size_id', '!=', "")->where('color_id', "")->count();
    $product_colors = SizesColorsProducts::where('product_id', $id)->where('color_id', '!=', "")->where('size_id', '!=', "")->count();


    if(Auth::check()) {

        if($product_simple > 0) {

            $product = Cart::where('product_id', $id)->where('size', "")->where('color', "")->where('status', "unpaid");
            $button_add_cart = ($product->count() > 0) ? false : true;
        }

        if($product_sizes > 0) {


            $product = Cart::where('product_id', $id)->where('size', "!=", "")->where('color', "none")->where('status', "unpaid");

            $product_2 = Cart::where('product_id', $id)->where('size', "!=", "")->where('color', "none")->where('status', "nocart");

            if($product->count() > 0) {
                $button_add_cart = false;
            }

            if($product_2->count() > 0) {
                $button_add_cart = true;
            }

        }

        if($product_colors > 0) {

            $product = Cart::where('product_id', $id)->where('size', "!=", "")->where('color',"!=", "none")->where('status', "unpaid");

            $product_2 = Cart::where('product_id', $id)->where('size', "!=", "")->where('color',"!=", "none")->where('status', "nocart");

            $product_3 = Cart::where('product_id', $id)->where('size', "!=", "")->where('color', "none")->where('status', "nocart");

            if($product->count() > 0) {
                $button_add_cart = false;
            }

            if($product_2->count() > 0) {
                $button_add_cart = true;
            }

            if($product_3->count() > 0) {
                $button_add_cart = false;
            }

            // dd($product->count());
            // $button_add_cart = ($product->count() > 0) ? true : false;
            // dd($button_add_cart);
        }

    }else {

        $cart_items = session()->get('cart');

        if($product_simple > 0) {

            foreach ($cart_items as $key => $item) {

                if ($item['id'] == $id) {
                    $button_add_cart = false;
                    break;
                }else {
                    $button_add_cart = true;
                }
            }
        }

        if($product_sizes > 0) {

            foreach ($cart_items as $key => $item) {

                if ($item['id'] == $id && $item['size'] != "" && $item['color'] == "none" && $item['status'] == "nocart" ) {
                    $button_add_cart = true;
                }elseif($item['id'] == $id && $item['size'] != "" && $item['color'] == "none" && $item['status'] == "unpaid") {
                    $button_add_cart = false;
                }
            }
        }

        if($product_colors > 0) {

            foreach ($cart_items as $key => $item) {
                if ($item['id'] == $id && $item['size'] != "" && $item['color'] != "none" && $item['status'] == "nocart" ) {
                    $button_add_cart = true;
                }elseif($item['id'] == $id && $item['size'] != "" && $item['color'] != "none" && $item['status'] == "unpaid") {
                    $button_add_cart = false;
                }
            }
        }
        // dd($button_add_cart);
    }
    return $button_add_cart;

}

function getColorDefaultProduct($id, $color) {

    $color_default = false;

    if(Auth::check()) {

        $product = Cart::where('product_id', $id);
        if($product->count() == 0) {
            $color_default = true;
            Cart::create([
                'user_id' => Auth::user()->id,
                'product_id' => $id,
                'color' => $color,
            ]);
        }elseif(($product->first()->size != "") && ($product->first()->color != "") ) {
            $color_default = false;
        }else {
            $color_default = true;
            $product->update([
                'color' => $color,
            ]);
        }
    }else {

        $cart_items = session()->get('cart');

        if($cart_items == []) {

            $color_default = true;
            $color_product = [
                "color" => $color,
                "status" => "nocart",
                "size" => "",
                "id" => $id
            ];
            $cart_items[] = $color_product;
            session()->put('cart', $cart_items);
        }else {

            foreach ($cart_items as $key => $item) {
                if ($item['id'] != $id) {

                    $color_default = true;

                    $color_product = [
                        "color" => $color,
                        "status" => "nocart",
                        "size" => "",
                        "id" => $id
                    ];
                    $cart_items[] = $color_product;
                    session()->put('cart', $cart_items);

                }else {
                    $color_default = false;
                    break;
                }
            }

            foreach ($cart_items as $key => $item) {
                if($item['id'] == $id ) {
                    if($item['color'] != "") {
                        $color_default = false;
                    }elseif($item['color'] == "none" && $item['size'] != "") {
                        $color_default = false;
                    }else {
                        $color_default = true;
                        $cart_items[$key]['color'] = $color;
                        session()->put('cart', $cart_items);
                    }
                }
            }
        }
    }
    return $color_default;
}

function getSizeSelectProduct($id, $size) {

    $size_select = false;

    if(Auth::check()) {

        $product = Cart::where('product_id', $id)->where('size', $size);
        if($product->count() > 0) {
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

function getSizeDefaultProduct($id, $size) {

    $size_default = false;

    if(Auth::check()) {

        $product = Cart::where('product_id', $id);

        if($product->count() == 0) {
            Cart::create([
                'user_id' => Auth::user()->id,
                'product_id' => $id,
                'size' => $size,
                'color' => "",
            ]);
            $size_default = false;
        }elseif(($product->first()->size != "") && ($product->first()->color != "") ) {
            $size_default = false;
        }else {
            $size_default = true;
            $product->update([
                'size' => $size,
            ]);
        }
    }else {

        $cart_items = session()->get('cart');

        if($cart_items == []) {
            $size_default = true;
            $size_product = [
                "color" => "",
                "status" => "nocart",
                "size" => $size,
                "id" => $id
            ];
            $cart_items[] = $size_product;
            session()->put('cart', $cart_items);
        }else {
            foreach ($cart_items as $key => $item) {
                if ($item['id'] != $id) {
                    $size_default = true;
                    $size_product = [
                        "color" => "",
                        "status" => "nocart",
                        "size" => $size,
                        "id" => $id
                    ];
                    $cart_items[] = $size_product;
                    session()->put('cart', $cart_items);
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
                        $cart_items[$key]['size'] = $size;
                        session()->put('cart', $cart_items);
                    }
                }
            }
        }

    }
    if($size_default == true) {

        $size = Size::where('name', $size)->first();
        if (!session()->has('size_select')) {
            session()->put('size_select', $size->id);
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

    $sizeProduct = SizesColorsProducts::where('product_id', $id)->where('size_id', $size)->sum('quantity');
    $stock = ($sizeProduct > 0) ? true : false;
    return $stock;
}

function checkStockColorProduct($id, $color) {

    $stock = false;

    $color = Color::where('code', $color)->first();

    if(Auth::check()) {
        $items = Cart::where('product_id', $id)->first();
        $size = Size::where('name', session()->get('size_select'))->first();

        $colorProduct = SizesColorsProducts::where('product_id', $id)->where('size_id', session()->get('size_select'))->where('color_id', $color->id)->sum('quantity');
        $stock = ($colorProduct > 0) ? true : false;

    }else {
        $cart_items = session()->get('cart');

        foreach ($cart_items as $key => $item) {
            if ($item['id'] == $id) {
                $size = $cart_items[$key]['size'];
                $size = Size::where('name', $size)->first();
                $colorProduct = SizesColorsProducts::where('product_id', $id)->where('size_id', $size->id)->where('color_id', $color->id)->sum('quantity');
                $stock = ($colorProduct > 0) ? true : false;
                break;
            }
        }

    }
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
    /*$curl = curl_init();

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
    $response = json_decode($response, true);*/
    // return round($response['result'], 2);
    return 77;
}

function getPriceProduct($id) {

    $product = Product::find($id);
    $price = "";

    if(Auth::check()) {
        $products_cart = Cart::where('product_id', $id);
        if(!($products_cart->count() == 0)) {
            if($products_cart->first()->size != "") {
                $size_id = Size::where('name', $products_cart->first()->size)->first()->get(['id'])->toArray();
                $price_product = SizesColorsProducts::where('product_id', $id)->where('size_id', session()->get('size_select'))->first();
                $price = $price_product->price;
            }else {
                $price = $product->selling_price;
            }
        }else {
            $price = $product->selling_price;
        }
    }else {

        // $cart = [];
        // session()->put('cart', $cart);
        $cart_items = session()->get('cart');
        // dd()

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
                        $price_product = SizesColorsProducts::where('product_id', $id)->where('size_id', $size_id[0]['id'])->first();
                        $price = $price_product->price;
                        break;
                    }
                }
            }

        }


        return $price;
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CurrencyController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::check()) {

            $user = Auth::user();
            $user->currency_id = $request->id;
            $user->save();
        }else {

            if (!session()->has('currency')) {
                $currency = '€';
                session()->put('currency', $currency);
            }
            session()->put('currency', $request->currency);
        }
        return redirect()->back();
    }

    public function getDataCart(Request $request) {

        if (!session()->has('cart_items')) {
            $cart_items = [];
            session()->put('cart_items', $cart_items);
        }

        $cart_items = $request->input('products');

        if (!(Auth::check())) {

            session()->put('cart_items', $cart_items);
        } else {

            foreach ($cart_items as $item) {

                $cart_item = Cart::where('product_id', $item['id'])->first();
                $cart_item->quantity = $item['quantity'];
                $cart_item->save();
            }
        }

        $cart_items = session()->get('cart_items');

        return redirect()->route('checkout');
    }

    public function removeItemCheckout(Request $request) {

        if(!(Auth::check())) {

            $cart_items = session()->get('cart_items');
            unset($cart_items[$request->id]);
            session()->put('cart_items', $cart_items);
        }else {

            $cart_item = Cart::where('product_id', $request->id)->first();
            $cart_item->delete();
        }

        return redirect()->route('checkout');
    }

}

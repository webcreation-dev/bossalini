<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\Wishlis;

class Wishlist extends Component
{
    public function render()
    {

        if(Auth::check())
        {
            $products_id = Wishlis::where('user_id', Auth::user()->id)->get(['product_id'])->toArray();
            $products = Product::whereIn('id', $products_id)->get();
        } else {
            if (!session()->has('wishlists')) {
                $wishlists = [];
                session()->put('wishlists', $wishlists);
            }

            if (!session()->has('cart')) {
                $cart = [];
                session()->put('cart', $cart);
            }
            $wishlists = session()->get('wishlists');
            $products = Product::whereIn('id', $wishlists)->get();
        }



        return view('livewire.wishlist', compact('products'))
        ->extends("layouts.master")
        ->section("content");
    }

    public function wishlist($id) {

        if(Auth::check()) {

            $wihlist = Wishlis::where('user_id', Auth::user()->id)->where('product_id', $id)->delete();

        }else {

            $wishlists = session()->get('wishlists');

            if (in_array($id, $wishlists)) {

                $key = array_search($id, $wishlists);
                if ($key !== false) {
                    array_splice($wishlists, $key, 1);
                }
                session()->put('wishlists', $wishlists);
            } else {

                $wishlists[] = $id;
                session()->put('wishlists', $wishlists);
            }
        }
    }

    public function addToCart($id, Request $request) {

        if(Auth::check()) {

            Cart::create([
                'user_id' => Auth::user()->id,
                'product_id' => $id,
            ]);

        }else {

            $cart = session()->get('cart');

            if (in_array($id, $cart)) {

                $key = array_search($id, $cart);
                if ($key !== false) {
                    array_splice($cart, $key, 1);
                }
                session()->put('cart', $cart);
            } else {

                $cart[] = $id;
                session()->put('cart', $cart);
            }
        }

        $request->merge(['product_id' => $id]);
    }
}

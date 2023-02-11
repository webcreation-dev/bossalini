<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Livewire\Component;
use App\Models\Product;
use App\Models\Wishlis;
use Illuminate\Support\Facades\Auth;

class Shop extends Component
{
    public function render()
    {
        if (!session()->has('wishlists')) {
            $wishlists = [];
            session()->put('wishlists', $wishlists);
        }

        if (!session()->has('cart')) {
            $cart = [];
            session()->put('cart', $cart);
        }

        $products = Product::all();

        return view('livewire.shop', compact('products'))
        ->extends("layouts.master")
        ->section("content");
    }

    public function wishlist($id) {

        if(Auth::check()) {

            $wishlist = Wishlis::where('product_id', $id);

            if($wishlist->count() > 0) {

                $wishlist->delete();
            }else {
                Wishlis::create([
                    'user_id' => Auth::user()->id,
                    'product_id' => $id,
                ]);
            }


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


    public function addToCart($id) {


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
    }
}

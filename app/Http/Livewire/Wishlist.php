<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class Wishlist extends Component
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

        $wishlists = session()->get('wishlists');

        $products = Product::whereIn('id', $wishlists)->get();

        return view('livewire.wishlist', compact('products'))
        ->extends("layouts.master")
        ->section("content");
    }

    public function wishlist($id) {

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

    public function addToCart($id) {

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

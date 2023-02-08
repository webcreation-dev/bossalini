<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class AddCart extends Component
{
    public function render()
    {
        if (!session()->has('cart')) {
            $cart = [];
            session()->put('cart', $cart);
        }

        $cart = session()->get('cart');

        $products = Product::whereIn('id', $cart)->get();

        $totals = Product::whereIn('id', $cart)->get(['original_price'])->toArray();

        $total = 0;
        foreach ($totals as $value) {
            $total += $value['original_price'];
        }

        $product_id = [];
        for ($i = 0; $i < 4; $i++) {
            $product_id[] = rand(1, 9);
        }

        $upsells_products = Product::whereIn('id', $product_id)->get();

        return view('livewire.add-cart', compact('products', 'upsells_products', 'total'))
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

    public function remove($id)
    {
        $cart = session()->get('cart');
        $key = array_search($id, $cart);
        if ($key !== false) {
            unset($cart[$key]);
        }
        session()->put('cart', $cart);
    }
}

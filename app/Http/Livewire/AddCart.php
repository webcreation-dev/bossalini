<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Wishlis;


class AddCart extends Component
{
    public function render()
    {
        if(Auth::check()) {

            $cart_products = Cart::where('user_id', Auth::user()->id)->where('status', 'unpaid')->get(['product_id'])->toArray();
            $products = Product::whereIn('id', $cart_products)->get();

        }else {

            if (!session()->has('cart')) {

                $cart = [];
                session()->put('cart', $cart);
            } else {

                $cart_items = session()->get('cart', []);
                $cart = collect($cart_items)->map(function ($item) {
                    return $item['id'];
                })->toArray();
            }
            $products = Product::whereIn('id', $cart)->get();

        }

        $product_id = [1,2,5,6];
        $upsells_products = Product::whereIn('id', $product_id)->get();

        return view('livewire.add-cart', compact('products', 'upsells_products'))
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


    public function removeItemProduct($id) {

        if(!(Auth::check())) {

            $cart_items = session()->get('cart');

            foreach ($cart_items as $key => $product) {
                if ($product['id'] == $id) {
                    unset($cart_items[$key]);
                    session()->put('cart', $cart_items);
                }
            }
        }else {

            $cart_item = Cart::where('product_id', $id)->first();
            $cart_item->delete();
        }

    }

    public function goToShop()
    {
        return redirect()->route('shop');
    }

    public function goToCheckout()
    {
        return redirect()->route('checkout');
    }
}

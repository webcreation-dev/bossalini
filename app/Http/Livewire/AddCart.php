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

            $products_id = Product::whereIn('id', $cart_products)->get(['id'])->toArray();
            $totals = Product::whereIn('id', $products_id)->get(['original_price'])->toArray();
            $total = 0;
            foreach ($totals as $value) {
                $total += $value['original_price'];
            }

        }else {

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
        }

        $product_id = [5,6,7,8];
        // for ($i = 0; $i < 4; $i++) {
        //     $product_id[] = rand(1, 9);
        // }

        $upsells_products = Product::whereIn('id', $product_id)->get();

        return view('livewire.add-cart', compact('products', 'upsells_products', 'total'))
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


    public function remove($id)
    {
        if(Auth::check()) {

            Cart::where('user_id', Auth::user()->id)->where('product_id', $id)->delete();
        }else {

            $cart = session()->get('cart');
            $key = array_search($id, $cart);
            if ($key !== false) {
                unset($cart[$key]);
            }
            session()->put('cart', $cart);
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

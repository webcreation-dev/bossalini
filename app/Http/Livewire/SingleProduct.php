<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Upsell;
use App\Models\Wishlis;
use Illuminate\Support\Facades\Auth;
class SingleProduct extends Component
{
    public function render(Request $request)
    {
        if (!session()->has('wishlists')) {
            $wishlists = [];
            session()->put('wishlists', $wishlists);
        }

        if (!session()->has('cart')) {
            $cart = [];
            session()->put('cart', $cart);
        }

        $products = Product::where('id', $request->product_id)->get();

        $images = ProductImage::where('product_id', $request->product_id)->get();

        $upsells_id = Upsell::where('product_id', $request->product_id)->get(['upsell_product_id'])->toArray();

        $upsells_products = Product::whereIn('id', $upsells_id)->get();

        return view('livewire.single-product', compact('products', 'images', 'upsells_products'))
        ->extends("layouts.master")
        ->section("content");
    }

    public function wishlist($id, Request $request) {

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
        $request->merge(['product_id' => $id]);

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

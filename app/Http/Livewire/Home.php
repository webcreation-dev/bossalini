<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Wishlis;
use Illuminate\Support\Facades\Auth;

class Home extends Component
{
    public function render()
    {
        if (!session()->has('wishlists')) {
            $wishlists = [];
            session()->put('wishlists', $wishlists);
        }

        $product_id = [1,2,3,4];
        // for ($i = 0; $i < 4; $i++) {
        //     $product_id[] = rand(1, 9);
        // }

        $products = Product::whereIn('id', $product_id)->get();
        return view('livewire.home', compact('products'))
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

}

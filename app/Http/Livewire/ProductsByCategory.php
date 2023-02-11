<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Wishlis;

class ProductsByCategory extends Component
{
    public function render(Request $request)
    {
        // dd($request);

        if (!session()->has('wishlists')) {
            $wishlists = [];
            session()->put('wishlists', $wishlists);
        }

        $category_id = $request->category_id;

        $products = Product::where('category_id', $request->category_id)->get();
        return view('livewire.products-by-category', compact('products', 'category_id'))
        ->extends("layouts.master")
        ->section("content");
    }

    public function wishlist($id, $category_id, Request $request) {

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
        $request->merge(['category_id' => $category_id]);

    }

}

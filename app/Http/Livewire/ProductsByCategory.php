<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductsByCategory extends Component
{
    public function render(Request $request)
    {

        if (!session()->has('wishlists')) {
            $wishlists = [];
            session()->put('wishlists', $wishlists);
        }

        $products = Product::where('category_id', $request->category_id)->get();
        return view('livewire.products-by-category', compact('products'))
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
}

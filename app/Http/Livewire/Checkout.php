<?php

namespace App\Http\Livewire;

use App\Models\Address;
use Livewire\Component;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Spatie\LaravelIgnition\FlareMiddleware\AddJobs;
use Termwind\Components\Dd;

class Checkout extends Component
{
    public function render()
    {
        if(!(Auth::check())) {

            if (!session()->has('cart_items')) {
                $cart_items = [];
                session()->put('cart_items', $cart_items);
            }

            $cart_items = session()->get('cart_items');
            $product_ids = array_column($cart_items, 'id');

            $products = Product::whereIn('id', $product_ids)->get();

            $addresses = [];

        }else {

            $cart_products = Cart::where('user_id', Auth::user()->id)->where('status', 'unpaid')->get(['product_id'])->toArray();
            $products = Product::whereIn('id', $cart_products)->get();

            $addresses = Address::where('user_id', Auth()->user()->id)->first();

            if($addresses == null) {
                $addresses = [];
            }else {
                $addresses = $addresses->toArray();
            }
            $cart_items = [];

        }


        return view('livewire.checkout', compact('products', 'addresses', 'cart_items'))
        ->extends("layouts.checkout")
        ->section("content");
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

}

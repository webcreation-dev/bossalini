<?php

namespace App\Http\Livewire;

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

            $cart_items = session()->get('cart_items');
            $product_ids = array_column($cart_items, 'id');

            $products = Product::whereIn('id', $product_ids)->get();

            $totals = Product::whereIn('id', $product_ids)->get(['original_price', 'id'])->toArray();
            $total = 0;
            foreach ($totals as $value) {
                $total += $value['original_price'] * $cart_items[$value['id']]['quantity'];
            }
            $addresses = [];

        }else {

            $cart_products = Cart::where('user_id', Auth::user()->id)->where('status', 'unpaid')->get(['product_id'])->toArray();
            $products = Product::whereIn('id', $cart_products)->get();

            $products_id = Product::whereIn('id', $cart_products)->get(['id'])->toArray();
            $totals = Product::whereIn('id', $products_id)->get(['original_price', 'id'])->toArray();
            $total = 0;
            foreach ($totals as $value) {
                $quantity = Cart::where('user_id', Auth::user()->id)->where('product_id', $value['id'])->where('status', 'unpaid')->first()->quantity;
                $total += $value['original_price'] * $quantity;
            }
            $addresses = Order::where('user_id', Auth()->user()->id)->where('status', 'default')->first()->get()->toArray();

            $cart_items = [];

        }

        return view('livewire.checkout', compact('products', 'total', 'addresses', 'cart_items'))
        ->extends("layouts.checkout")
        ->section("content");
    }

    // public function removeItem($id)
    // {
    //     dd($id);
    //     $cart = Cart::where('user_id', Auth::user()->id)->where('product_id', $id)->where('status', 'unpaid')->first();
    //     $cart->delete();
    //     $this->emit('cartUpdated');
    // }
}

<?php

namespace App\Http\Livewire;

use App\Models\Address;
use App\Models\Order;
use App\Models\OrderItem;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Account extends Component
{
    public function render()
    {
        if(Auth::check()) {

            $orders = Order::where('user_id', Auth()->user()->id)->get(['id'])->toArray();
            $order_items = Order::whereIn('order_id', $orders)->get();
            $default_address = Address::where('user_id', Auth()->user()->id)->first();

        }else{
            return redirect()->route('login');
        }

        return view('livewire.account', compact('order_items', 'default_address'))
        ->extends("layouts.master")
        ->section("content");
    }

    public function addresse() {
        return redirect()->route('addresse');
    }

}


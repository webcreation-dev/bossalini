<?php

namespace App\Http\Livewire;

use App\Models\Address;
use App\Models\OrderItem;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Account extends Component
{
    public function render()
    {
        $orders = OrderItem::where('user_id', Auth()->user()->id)->get();

        $default_address = Address::where('user_id', Auth()->user()->id)->get();

        return view('livewire.account', compact('orders', 'default_address'))
        ->extends("layouts.master")
        ->section("content");
    }

    public function addresse() {
        return redirect()->route('addresse');
    }

}


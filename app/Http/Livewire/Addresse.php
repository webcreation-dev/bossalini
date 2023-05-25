<?php

namespace App\Http\Livewire;

use App\Models\Address;
use App\Models\Order;
use Livewire\Component;

class Addresse extends Component
{

    public $currentPage = ADDRESS;
    public $address = [];

    public function render()
    {
        $default_address = Address::where('user_id', Auth()->user()->id);

        if(!($default_address->count() == 0)) {
            $default_address = Address::where('user_id', Auth()->user()->id)->first()->get();
        }
        return view('livewire.addresse', compact('default_address'))
        ->extends("layouts.master")
        ->section("content");
    }

    public function getFormAddress()
    {
        $default_address = Address::where('user_id', Auth()->user()->id);

        if(!($default_address->count() == 0)) {
            $this->address = Address::where('user_id', Auth()->user()->id)->first()->toArray();
        }
        $this->currentPage = FORMADDRESS;

    }

    public function getAddress()
    {
        $this->currentPage = ADDRESS;
    }

    public function createAddress() {

        $order = Address::where('user_id', Auth()->user()->id);

        if($order->count() == 0) {
            Address::create([
                'user_id' => Auth()->user()->id,
                'first_name' => $this->address['first_name'],
                'last_name' => $this->address['last_name'],
                'email' => $this->address['company'],
                'apartment' => $this->address['apartment'],
                'city' => $this->address['city'],
                'country' => $this->address['country'],
                'zip_code' => $this->address['zip_code'],
                'phone' => $this->address['phone'],
            ]);
        } else {

            $order->update([
                'user_id' => Auth()->user()->id,
                'first_name' => $this->address['first_name'],
                'last_name' => $this->address['last_name'],
                'email' => $this->address['company'],
                'apartment' => $this->address['apartment'],
                'city' => $this->address['city'],
                'country' => $this->address['country'],
                'zip_code' => $this->address['zip_code'],
                'phone' => $this->address['phone']
            ]);

        }

        $this->currentPage = ADDRESS;
    }
}

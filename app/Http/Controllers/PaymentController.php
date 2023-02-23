<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Omnipay\Omnipay;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\SizesColorsProducts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Tester\Constraint\CommandIsSuccessful;

class PaymentController extends Controller
{
    private $gateway;

    public function __construct() {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_SECRET_KEY'));
        $this->gateway->setTestMode(true);
    }

    public function pay(Request $request) {

        $order = Order::create([
            'user_id' => (Auth::check()) ? Auth::user()->id : null,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email'  => $request->email,
            'country' =>  $request->country,
            'zip_code' =>  $request->zip_code,
            'phone'   =>  $request->phone,
            'city' =>  $request->city,
            'amount' => $request->amount,
            'apartment' => $request->address,
            'order_status' => 'En cours',
        ]);

        try {
            $response = $this->gateway->purchase(array(
                'amount' => $request->amount,
                'currency'=> env('PAYPAL_CURRENCY'),
                'returnUrl'=> route('paypal.success',["order_id" =>$order->id ]),
                'cancelUrl'=> route('paypal.error',["order_id" =>$order->id ]),
            ))->send();

            if ($response->isRedirect()) {
                $response->redirect();
            }else{
                return $response->getMessage();
            }
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }


    public function success($id , Request $request)
    {
        $order = Order::where('id', $id)->first();

        if($request->input('paymentId') && $request->input('PayerID')) {
            $transaction = $this->gateway->completePurchase(array(
                'payer_id' => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId')
            ));

            $response = $transaction->send();

            if($response->isSuccessful()) {
                $arr = $response->getData();
                $order->payment_id = Order::generateCode();
                $order->payment_status = $arr['state'];
                $order->save();


                #Boucler sur les éléments dans le panier pour les saves en base de donnees dans OrderItems
                if(Auth::check()) {

                    $cart_products = Cart::where('user_id', Auth::user()->id)->where('status', 'unpaid')->get();
                    foreach ($cart_products as $key => $value) {

                        OrderItem::create([
                            'order_id' => $order->id,
                            'product_id' => $value->product_id,
                            'product_color_id' => $value->color,
                            'product_size_id'  => $value->size,
                            'price' =>  getPriceProduct($value->product_id),
                            'quantity' =>  $value->quantity,
                            'total'   =>  getPriceProduct($value->product_id) * $value->quantity,
                        ]);
                    }

                    foreach ($cart_products as $key => $value) {

                        $product = SizesColorsProducts::where('product_id', $value->product_id)
                            ->where('color_id', $value->color)
                            ->where('size_id', $value->size)
                            ->first();

                        $product->update([
                            'quantity' => $product->quantity - $value->quantity,
                        ]);
                    }
                    $cart_products = Cart::where('user_id', Auth::user()->id)->where('status', 'unpaid')->delete();

                }else {

                    $cart = session()->get('cart');
                    $cart_items = session()->get('cart_items');

                    foreach ($cart as $key => $item) {
                        if ($item['status'] == "unpaid") {

                            foreach ($cart_items as $key => $value) {

                                if($value['id'] == $item['id']) {
                                    $quantity = $value['quantity'];
                                }
                            }

                            OrderItem::create([
                                'order_id' => $order->id,
                                'product_id' => $item['id'],
                                'product_color_id' => $item['color'],
                                'product_size_id'  => $item['size'],
                                'price' =>  getPriceProduct($item['id']),
                                'quantity' =>  $quantity,
                                'total'   =>  getPriceProduct($item['id']) * $quantity,
                            ]);
                        }
                    }


                    foreach ($cart as $key => $item) {
                        if ($item['status'] == "unpaid") {

                            foreach ($cart_items as $key => $value) {

                                if($value['id'] == $item['id']) {
                                    $quantity = $value['quantity'];
                                }
                            }

                            $product = SizesColorsProducts::where('product_id', $value->product_id)
                            ->where('color_id', $value->color)
                            ->where('size_id', $value->size)
                            ->first();

                            $product->update([
                                'quantity' => $product->quantity - $quantity,
                            ]);
                        }
                    }

                    $paid_items = array_filter($cart, function($item) {
                        return $item['status'] != "unpaid";
                    });
                    session()->put('cart', $paid_items);
                    session()->put('cart_items', []);

                }

            }else{
                $order->payment_status = 'Failed';
                $order->save();
                return $response->getMessage();
            }
        }else{
            $order->payment_status = 'declined';
            $order->save();
            return 'Payment declined';
        }

        dd(1);

    }

    public function error() {
        return 'User declined';
    }
}

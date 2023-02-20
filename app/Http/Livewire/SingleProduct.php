<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\Color;
use App\Models\ColorProduct;
use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Size;
use App\Models\SizeProduct;
use App\Models\SizesColorsProducts;
use App\Models\Upsell;
use App\Models\Wishlis;
use Illuminate\Support\Facades\Auth;
class SingleProduct extends Component
{
    public function render(Request $request)
    {
        $colors = null;
        $sizes = null;

        if (!session()->has('wishlists')) {
            $wishlists = [];
            session()->put('wishlists', $wishlists);
        }

        if (!session()->has('cart')) {
            $cart = [];
            session()->put('cart', $cart);
        }
        $cart_items = session()->get('cart');
        // dd($cart_items);

        $products = Product::where('id', $request->product_id)->get();

        $images = ProductImage::where('product_id', $request->product_id)->get();

        $upsells_id = Upsell::where('product_id', $request->product_id)->get(['upsell_product_id'])->toArray();

        $upsells_products = Product::whereIn('id', $upsells_id)->get();


        $product_simple = SizesColorsProducts::where('product_id', $request->product_id)->where('color_id', "")->where('size_id', "")->count();
        $product_sizes = SizesColorsProducts::where('product_id', $request->product_id)->where('size_id', '!=', "")->where('color_id', "")->count();
        $product_colors = SizesColorsProducts::where('product_id', $request->product_id)->where('color_id', '!=', "")->where('size_id', '!=', "")->count();

        if($product_sizes > 0) {

            $sizes_id = SizesColorsProducts::where('product_id', $request->product_id)
                                            ->select('size_id')
                                            ->distinct()
                                            ->get()
                                            ->pluck('size_id')
                                            ->toArray();
            $sizes = Size::whereIn('id', $sizes_id)->get();
        }

        if($product_colors > 0) {

            $sizes_id = SizesColorsProducts::where('product_id', $request->product_id)
                                            ->select('size_id')
                                            ->distinct()
                                            ->get()
                                            ->pluck('size_id')
                                            ->toArray();
            $sizes = Size::whereIn('id', $sizes_id)->get();

            $size_id = SizesColorsProducts::where('product_id', $request->product_id)->select('size_id')->distinct()->first();
            $size_name = Size::where('id', $size_id->size_id)->first();
            $first_size_id = $size_id->size_id;

            if(getSizeDefaultProduct($request->product_id, $size_name->name)) {
                $colors_id = SizesColorsProducts::where('product_id', $request->product_id)
                                                ->where('size_id', $first_size_id)
                                                ->get(['color_id'])
                                                ->toArray();
                $colors = Color::whereIn('id', $colors_id)->get();
            }else {
                $colors_id = SizesColorsProducts::where('product_id', $request->product_id)
                                                ->where('size_id', session()->get('size_select'))
                                                ->get(['color_id'])
                                                ->toArray();
                $colors = Color::whereIn('id', $colors_id)->get();
            }
        }


        return view('livewire.single-product', compact('products', 'images', 'upsells_products', 'colors', 'sizes'))
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



    /*public function addToCart($id) {

        $product = [
            "color" => "",
            "status" => "unpaid",
            "size" => "",
            "id" => $id
        ];

        if(!(Auth::check())) {

            $product_in_cart = false;

            if (session()->has('cart')) {
                $cart_items = session()->get('cart');

                foreach ($cart_items as $key => $item) {
                    if ($item['id'] == $id) {
                        $cart_items[$key]['status'] = "unpaid";
                        session()->put('cart', $cart_items);
                        $product_in_cart = true;
                        break;
                    }
                }
            }
            if (!$product_in_cart) {
                $cart_items = session()->get('cart');
                $cart_items[] = $product;
                session()->put('cart', $cart_items);
            }

        }else {

            $product = Cart::where('product_id', $id);
            if(!($product->count() == 0)) {
                Cart::create([
                    'user_id' => Auth::user()->id,
                    'product_id' => $id,
                    'status' => "unpaid",
                ]);
            }else {
                $product->update([
                    'status' => "unpaid",
                ]);
            }

        }
    }*/

    public function saveColorProduct($color, $id, Request $request) {

        // $color_product = [
        //     "color" => $color,
        //     "status" => "nocart",
        //     "size" => "",
        //     "id" => $id
        // ];

        if(!(Auth::check())) {

            // $product_in_cart = false;

            // if (session()->has('cart')) {
            $cart_items = session()->get('cart');

            foreach ($cart_items as $key => $item) {
                if ($item['id'] == $id) {
                    $cart_items[$key]['color'] = $color;
                    session()->put('cart', $cart_items);
                    // $product_in_cart = true;
                    break;
                }
            }
            // }
            // if (!$product_in_cart) {
            //     $cart_items = session()->get('cart');
            //     $cart_items[] = $color_product;
            //     session()->put('cart', $cart_items);
            // }

        }else {

            $product = Cart::where('product_id', $id);
            // if(!($product->count() == 0)) {
            //     Cart::create([
            //         'user_id' => Auth::user()->id,
            //         'product_id' => $id,
            //         'color' => $color,
            //     ]);
            // }else {
                $product->update([
                    'color' => $color,
                ]);
            // }
        }
        $request->merge(['product_id' => $id]);
    }

    public function saveSizeProduct($size, $id, Request $request) {

        $size_product = [
            "color" => "",
            "status" => "nocart",
            "size" => $size,
            "id" => $id
        ];

        if(!(Auth::check())) {

            $product_in_cart = false;

            if (session()->has('cart')) {
                $cart_items = session()->get('cart');

                foreach ($cart_items as $key => $item) {
                    if ($item['id'] == $id) {
                        $cart_items[$key]['color'] = "none";
                        $cart_items[$key]['size'] = $size;
                        session()->put('cart', $cart_items);
                        $product_in_cart = true;
                        break;
                    }
                }
            }

            if (!$product_in_cart) {
                $cart_items = session()->get('cart');
                $cart_items[] = $size_product;
                session()->put('cart', $cart_items);
            }

        }else {

            $product = Cart::where('product_id', $id);
            if($product->count() == 0) {
                Cart::create([
                    'user_id' => Auth::user()->id,
                    'product_id' => $id,
                    'size' => $size,
                    'color' => "",
                ]);
            }else {
                $product->update([
                    'size' => $size,
                    'color' => 'none',
                ]);

            }

        }
        $size = Size::where('name', $size)->first();

        if (!session()->has('size_select')) {
            session()->put('size_select', $size);
        }
        session()->put('size_select', $size->id);

        $request->merge(['product_id' => $id]);
    }

    public function addProductToCart($id, Request $request) {

        $product = [
            "color" => "",
            "status" => "unpaid",
            "size" => "",
            "id" => $id
        ];

        if(!(Auth::check())) {-

            $product_in_cart = false;

            if (session()->has('cart')) {
                $cart_items = session()->get('cart');

                foreach ($cart_items as $key => $item) {
                    if ($item['id'] == $id) {
                        $cart_items[$key]['status'] = "unpaid";
                        session()->put('cart', $cart_items);
                        $product_in_cart = true;
                        break;
                    }
                }
            }
            if (!$product_in_cart) {
                $cart_items = session()->get('cart');
                $cart_items[] = $product;
                session()->put('cart', $cart_items);
                $product_in_cart = true;
            }

        }else {

            $product = Cart::where('product_id', $id);
            if($product->count() == 0) {
                Cart::create([
                    'user_id' => Auth::user()->id,
                    "color" => "",
                    "size" => "",
                    'product_id' => $id,
                    'status' => "unpaid",
                ]);
            }else {
                $product->update([
                    'status' => "unpaid",
                ]);
            }

        }
        $request->merge(['product_id' => $id]);
}

}

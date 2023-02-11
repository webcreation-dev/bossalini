<?php

namespace App\Models;

use App\Models\ProductImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'length',
        'description',
        'original_price',
        'quantity',
        'color',
        'category_id',
    ];

    public function productImages()
    {
        return $this->hasMany(ProductImage::class,'product_id','id');
    }

    public function category()
    {
        return $this->belongsTo(Categories::class,'category_id','id');
    }

    public static function getFirstImageAttribute($id)
    {
        $images = ProductImage::where('product_id', $id)->first();
        return $images->image;
    }

    public static function getStatusWishlist($id)
    {
        if(Auth::check()) {

            $wihlist = Wishlis::where('user_id', Auth::user()->id)->where('product_id', $id);

            if($wihlist->count() > 0) {
                return "black";
            }else {
                return "none";
            }


        }else {
            $wishlists = session()->get('wishlists');

            if (in_array($id, $wishlists)) {

                return "black";
            } else {

                return "none";
            }
        }

    }

    public static function getStatusCart($id)
    {
        if(Auth::check()) {

            $cart = Cart::where('user_id', Auth::user()->id)->where('product_id', $id);

            if($cart->count() > 0) {
                return true;
            }else {
                return false;
            }

        }else {
            $cart = session()->get('cart');

            if (in_array($id, $cart)) {
                return true;
            } else {
                return false;
            }
        }

    }


}

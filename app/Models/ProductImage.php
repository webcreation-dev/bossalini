<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;

    protected $table = 'product_images';

    protected $fillable = [
        'product_id',
        'image',
    ];

    public static function getImageByProductId($productId)
    {
        $product = self::where('product_id', $productId)->first();

        return $product ? $product->image : null;
    }

}

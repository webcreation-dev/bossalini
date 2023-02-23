<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';

    protected $fillable = [
        'first_name',
        'last_name',
        'company',
        'apartment',
        'city',
        'country',
        'zip_code',
        'phone',
        'user_id',
        'status',
        'amount',
        'payment_status',
        'payment_id',
    ] ;

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class,'order_id','id');
    }

    public static function generateCode() {
        $letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $digits = "0123456789";
        $code = "B";
        for ($i = 0; $i < 5; $i++) {
            if ($i == 2) {
                $code .= $digits[rand(0, 9)];
            } else {
                $code .= $letters[rand(0, 25)];
            }
        }
        return $code;
    }

}

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
    ] ;

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class,'order_id','id');
    }
}

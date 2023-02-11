<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    protected $table = 'order_items';

    protected $fillable = [
        'order_code',
        'date',
        'status_payment',
        'status_fulfilement',
        'total_price',
        'user_id',
    ] ;
}

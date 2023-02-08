<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';

    protected $fillable = [
        'tracking_no',
        'fullname',
        'email',
        'phone',
        'adresse',
        'status',
        'order_status',
        'payement_id',
    ] ;
    
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class,'order_id','id');
    }
}

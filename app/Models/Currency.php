<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'rate',
        'image'
    ];

    public function user()
    {
        return $this->hasMany(User::class,'currency_id','id');
    }
}

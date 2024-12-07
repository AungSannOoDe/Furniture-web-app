<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    protected $fillable=[
        'user_id',
        'order_code',
        'total_price',
        'status'
    ];
        use HasFactory;

}

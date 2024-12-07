<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Orderlist extends Model
{
    protected $fillable=[
        'user_id',
        'product_id',
        'qty',
        'total',
        'order_code',
      ];
      use HasFactory;

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class productDetails extends Model
{
    protected $fillable = [
        'product_id',
        'width',
        'height',
        'ModelNumber',
        'Warranty',
        'Material_1',
        'Material_2',
        'Country'
    ];
}

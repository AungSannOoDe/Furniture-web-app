<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable=[
        'name',
       'Cate_id',
       'price',
       'image',
       'descriptions',
       'waiting_time',
       'view_count'

    ];
    public static  function countCategory($id){
        $Catcount=product::select('product.*')->where('categories.id',$id)
        ->join('categories','categories.id','products.Cate_id')
        ->count();
        return $Catcount;
    }

}

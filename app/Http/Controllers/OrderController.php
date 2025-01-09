<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function viewsOrder(){
        $order=Order::select('orders.*','users.name as username')
        ->leftjoin('users','users.id','orders.user_id')
        ->orderBy('created_at','desc')
        ->get() ;
        return view('admin.users.order',compact('order'));
    }
}

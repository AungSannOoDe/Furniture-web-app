<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Orderlist;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function pizzalist(Request $request){
        logger($request);
        if($request->status=="asc"){
            $data=product::orderBy('created_at','asc')->get();
        }
         else if($request->status=="desc"){
            $data=product::orderBy('created_at','desc')->get();
         }
        return $data;
    }
    public function removeCart(Request $request){
        Cart::where('user_id',Auth::user()->id)->where('pizza_id',$request->productId)->where('id',$request->orderId)->delete();
    }
    public function OrderList(Request $request){
        $total=0;
        foreach($request->all() as $item){
           $data= Orderlist::create([
                'user_id'=>$item['user_id'],
                'product_id'=>$item['pizza_id'],
                'total'=>$item['total'],
                'qty'=>$item['qty'],
                'order_code'=>$item['order_code']
            ]);
     $total+=$data->total+3000;
        }
        Order::create([
         'user_id'=>Auth::user()->id,
         'order_code'=>$data->order_code,
         'total_price'=>$total
        ]);
        Cart::where('user_id',Auth::user()->id)->delete();
   $response=[
    'status'=>'true'
   ];
   return response()->json($response,200);
    }
    public function addtoCart(Request $request){
        $data=$this->getOrderData($request);
       Cart::create($data);
       $response=[
        'message'=>'Add to Cart Successfully',
        'status'=>'success'
       ];
       return response()->json($response,200);

    }
    public function ClearCart(){
 Cart::where('user_id',Auth::user()->id)->delete();
    }


  public function status(){
    $order=Order::select('orders.*','users.name as user_name')
    ->leftjoin('users','users.id','orders.user_id')
    ->orderBy('created_at','desc')
 ;
  if($request->status==null){
     $order=$order->get();
  }
  else{
      $order=$order->where('orders.status',$request->status)->get();
  }
  return response()->json($order,200);
  }
  public function statusUpdate(Request $request){
    $data=$this->getStatusOrder($request);
    $orderlist= Order::where('id',$request->orderId)->update($data);
    return response()->json($orderlist,200);
  }

  private function getStatusOrder($request){
   return [
    'status'=>$request->statusUpdate
   ];
  }
}

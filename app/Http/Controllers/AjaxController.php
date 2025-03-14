<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\Orderlist;
use Illuminate\Http\Request;
use App\Models\productDetails;

class AjaxController extends Controller
{
    public function productlist(Request $request){
        logger($request->all());
        $product=Product::get();
        logger($product);
        return $product;
    }
    public function list(Request $request){
        if($request->status=="asc"){
            $data=Product::orderBy('created_at','asc')->get();
        }
         else if($request->status=="desc"){
            $data=Product::orderBy('created_at','desc')->get();
         }
        return $data;
    }
    public function  showtable(Request $request){
        $Cate_id= $request->value;
         $data=Product::where('Cate_id',$Cate_id)->get();
         return $data;
    }
    public function showForm(Request $request){
        $product_id=$request->id;
        $data = Product::where('id', $product_id)->get();
        return $data;
    }
    public function removeCart(Request $request){
        Cart::where('user_id',Auth::user()->id)->where('pizza_id',$request->productId)->where('id',$request->orderId)->delete();
    }
    public function formadd(Request $request){

        $raw=$this->getFormad($request);
        productDetails::create($raw);
        $response=[
            'message'=>'Add Formad Successfully',
            'status'=>'success'
           ];
           return response()->json($response,200);
    }
    private function getFormad($request){
        return[
            'product_id'=>$request->id,
            'width'=>$request->width,
            'height'=>$request->height,
            'ModelNumber'=>$request->model,
            'Warranty'=>$request->warr,
            'Material_1'=>$request->m1,
            'Material_2'=>$request->m2,
            'Country'=>$request->coun

        ];
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

<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function index(){
        $id=Auth::user()->id;
         $Carts=Cart::where('user_id',$id)->get();
          $profile=Auth::user()->id;
        return view('user.index',compact(['Carts','profile']));
     }
     public function product(){
        $id=Auth::user()->id;
        $Carts=Cart::where('user_id',$id)->get();
          $profile=Auth::user()->id;
        $products=Product::get();
        return view('user.product',compact(['products','Carts','profile']));
     }
     public function singleProduct($id){
        $id=Auth::user()->id;
        $Carts=Cart::where('user_id',$id)->get();
          $profile=Auth::user()->id;
        return view('user.singleproduct');
     }
     public function billings(){
        $id=Auth::user()->id;
        $Carts=Cart::where('user_id',$id)->get();
          $profile=Auth::user()->id;
        return view('user.billings',compact(['Carts','profile']));
     }
     public function Contact(){
        $id=Auth::user()->id;
        $Carts=Cart::where('user_id',$id)->get();
          $profile=Auth::user()->id;
        return view('user.Contact',compact(['Carts','profile']));
     }
     public function about(){
        $id=Auth::user()->id;
        $Carts=Cart::where('user_id',$id)->get();
          $profile=Auth::user()->id;
         return view('user.about',compact(['Carts','profile']));
     }
     public function details(){
        $id=Auth::user()->id;
        $Carts=Cart::where('user_id',$id)->get();
          $profile=Auth::user()->id;
        return view('user.details',compact(['Carts','profile']));
     }
public function cart(){
    return view('user.cart');
}
}

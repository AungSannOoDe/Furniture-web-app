<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(){
        return view('user.index');
     }
     public function product(){
        return view('user.product');
     }
     public function singleProduct(){
        return view('user.singleproduct');
     }
     public function billings(){
        return view('user.billings');
     }
     public function Contact(){
        return view('user.Contact');
     }
     public function about(){
         return view('user.about');
     }
     public function details(){
        return view('user.details');
     }
public function cart(){
    return view('user.cart');
}
}

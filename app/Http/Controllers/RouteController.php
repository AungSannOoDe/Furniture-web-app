<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\contact;
use App\Models\product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function productlist(){
        $products=product::get();
        return response()->json($products,200);
    }
    public function userlist(){
        $user=product::get();
        return response()->json($user,200);
    }
    public function createCategory(Request $request){
     $data=[
     'Cate_name'=>$request->name,
     'created_at'=>Carbon::now(),
     'updated_at'=>Carbon::now()
     ];
     $response=Category::create($data);
     return response()->json($response,200);
    }
    public function createContact(Request $request){
    $data=[
     'name'=>$request->name,
     'email'=>$request->email,
     'phone'=>$request->phone,
     'message'=>$request->message,
     'updated_at'=>Carbon::now(),
     'created_at'=>Carbon::now()
    ];
    contact::create($data);
    $response=contact::orderBy('created_at')->get();
    return response()->json($response,200);
    }
    public function deleteCategory($id){
        $data=Category::where('id',$id)->first();
        if(isset($data)){
            Category::where('id',$id)->delete();
            return response()->json(["status"=>true,"message"=>"delete success","deleData"=>$data],200);
        }
        return response()->json(["status"=>false,"message"=>"Message is not delete"],200);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function productdet($id){
        $products=product::get()->where('id',$id);
        return view('admin.product.details',compact('products'));
        }
        public function deleteproduct($id){
 product::where('id',$id)->delete();
 return back()->with(["deleteSuccess"=>"product Deleted Successfully"]);
        }
        public  function product(){
            $Categories=Category::get();
            $products=Product::get();
            return view('admin.product.product',compact(['Categories','products']));
        }
        public function addproduct(Request $request){
            $this->ProductValidationCheck($request);
            $data=$this->getData($request);
            $filePath=public_path('storage');
          if($request->hasFile('image')){
            $Name=uniqid().$request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('image',$Name,'public');
            $data['image']=$Name;
            Product::create($data);
         return back()->with(["InsertSuccess"=>"product added Successfully"]);
          }
        }
    private function ProductValidationCheck($request){
        Validator::make($request->all(),[
            "name"=>"required|min:3|unique:products,name".$request->id,
            "price"=>"required|min:5|integer",
            "image"=>"required|mimes:png,jpeg,jpg|file",
            "Categories"=>"required",
            "des"=>"required",
            "waiting"=>"required|integer"
        ])->validate();
    }

    private function getData($request){
        return[
    "name"=>$request->name,
    "Cate_id"=>$request->Categories,
    "price"=>$request->price,
    "descriptions"=>$request->des,
    "waiting_time"=>$request->waiting
        ];
    }

}

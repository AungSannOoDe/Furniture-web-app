<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
            $product= Product::select('products.*','categories.Cate_name as CatName')->when(request('key'),function($query){
                $query->where('name','like','%'.request('key').'%');
              })
              ->join('categories','categories.id','products.Cate_id')
              ->orderBy('created_at','desc')->paginate(5);
              $product->appends(request()->all());
            return view('admin.product.product',compact(['product','Categories']));
        }
     public function index(){
        return view('user.app');
     }
        public function updateProduct(Request $request){
            $this->ProductUpdateValidationCheck($request);
           $data=$this->getUpdateData($request);
           if($request->hasFile('image')){

            $oldImageName=Product::where('id',$request->furId)->first();
            $oldImageName=$oldImageName->image;
            if($oldImageName !=null){
                Storage::delete('public/image'.$oldImageName);
            }
            $fileName=uniqid().$request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('image',$fileName,'public');
            $data['image']= $fileName;
            Product::where('id',$request->furId)->update($data);
            return redirect()->route('admin#product')->with(['updateSuccess'=>'Product Updated Successful']);

          }

        }
        public function editproduct($id){
            $products=product::get()->where('id',$id);
            $Categories=Category::get();
            return view('admin.product.Editing',compact(['products','Categories']));
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
    private function ProductUpdateValidationCheck($request){
        Validator::make($request->all(),[
    "furName"=>"required|min:3|unique:products,name".$request->id,
    "furPrice"=>"required|min:5|integer",
    "image"=>"required|mimes:png,jpeg,jpg|file",
    "pizzaCategory"=>"required",
    "furDescription"=>"required",
    "Waiting"=>"required",
        ])->validate();
    }
private function getUpdateData($request){
    return[
        "name"=>$request->furName,
        "Cate_id"=>$request->pizzaCategory,
        "price"=>$request->furPrice,
        "descriptions"=>$request->furDescription,
        "waiting_time"=>$request->Waiting
    ];
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

<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function addCate( Request $request){
        $this->CategoryValidation($request);
       $data= $this->getData($request);
      Category::create($data);
      return back();
    }
    public function deleteCate($id){

          Category::where('id',$id)->delete();
          return redirect()->route('admin#category')->with(["CateDeleted"=>"Category delete Successfully"]);
    }
    public function category(){
        $Categories=Category::get();
        return view('admin.product.Category',compact('Categories'));
    }
    private function getData($request){
     $data=[
        'Cate_name'=>$request->CateName
     ];
     return $data;
    }
    private function CategoryValidation($request){
    Validator::make($request->all(),[
             'CateName'=>'required|min:4'
    ])->validate();
    }

}

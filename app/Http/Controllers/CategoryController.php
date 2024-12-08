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
    public function CateUpdate(Request $request){
        $this->CategoryValidation($request);
        $data=$this->getData($request);
        Category::where('id',$request->id)->update($data);
        return redirect()->route('admin#category')->with(['updateSuccess'=>'Updated Successfully.....']);

    }
    public function editCate($id){
        $Category=Category::where('id',$id)->get();
      return view("admin.product.EditCategory",compact('Category'));
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
    public function CategoryValidation($request){
        Validator::make($request->all(),[
            'CateName'=>'required|min:4,|unique:categories,Cate_name,'.$request->CategoryID
        ],[
            'CateName.required'=>'u need to fill',
            'CateName.unique'=>'this name is already exist'
        ])->validate();
    }



}

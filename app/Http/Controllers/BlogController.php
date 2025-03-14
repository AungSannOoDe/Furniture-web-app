<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    public function addBlog(Request $request){
       $this->checkValidation($request);

    }
    private function checkValidation($request){
        Validator::make($request->all(),[
         "title"=>"required|min:3",
        "image"=>"required|mimes:png,jpeg,jpg|file",
         "message"=>"required|min:20"
        ])->validate();
    }
}

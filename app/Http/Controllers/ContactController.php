<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function addCon(Request $request){
       $this->MessageValidation($request);
       $data=$this->getData($request);
       Contact::create($data);
       return back()->with(["Success"=>"Messages Added Successfully"]);
    }
    public function Reviwes(){
          dd("hello");
    }
    private function MessageValidation($request){
        Validator::make($request->all(),[
          "name"=>"required|min:3",
          "email"=>"required|email|min:5",
          "message"=>"required"
        ])->validate();
}
private function getData($request){
    return[
        "name"=>$request->name,
        "email"=>$request->email,
        "message"=>$request->message
    ];
}
}

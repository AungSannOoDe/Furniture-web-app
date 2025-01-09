<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class profileController extends Controller
{
    public function profile(){
        $id=Auth::user()->id;
        $userinfo=User::select()->where('id',$id)->first();
        return view('admin.profile.profile',compact('userinfo'));
    }
    public function changePassword(){
        return view('admin.profile.changepassword');
    }

}

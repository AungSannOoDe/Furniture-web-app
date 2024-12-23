<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class profileController extends Controller
{
    public function profile(){
        $id=Auth::user()->id;
        $userinfo=User::select()->where('id',$id)->first();
        return view('admin.profile.profile',compact('userinfo'));
    }
    public function details($id){
        $user=User::where('id',$id)->get();
        return view('admin.users.details',compact('user'));
    }
    public function changePassword(){
        return view('admin.profile.changepassword');
    }

}

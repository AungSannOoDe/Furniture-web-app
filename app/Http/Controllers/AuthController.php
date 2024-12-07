<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginPage(){
        return view('admin.loginPage');
    }
    public function registerPage(){
        return view('admin.RegisterPage');
    }
    public function dashboard(){
        return view('admin.Dashboard.admindashboard');
    }
    public function viewusers(){
        return view('admin.users.user');
    }
}

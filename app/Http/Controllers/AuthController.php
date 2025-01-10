<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Order;
use App\Models\Orderlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

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
        $admin=User::when(request('key'),function($query){
            $query->orWhere('name','like','%'.request('key').'%')
            ->orWhere('address','like','%'.request('key').'%')
            ->orWhere('email','like','%'.request('key').'%')
            ;
              })
              ->where('role','admin')
              ->orderBy('updated_at','asc')
              ->paginate(2);
        $admin->appends(request()->all());
        return view('admin.users.user',compact('admin'));
    }
    public function details($id){
        $adminId=decrypt($id);
        $userinfo=User::where('id',$adminId)->first();
        $hashing=Hash::make(User::where('id',$id)->first());
        return view('admin.users.userprofile',compact(['userinfo','hashing']));
    }
    public function delete($id){
        User::where('id',$id)->delete();
  return back()->with(['success'=>"Users information deleted successfully"]);
    }
    public function viewsOrder($ordercode){
          $order=Order::where('order_code',$ordercode);
          $orderlist=Orderlist::select('orderlists.*','users.name as username','products.name as productname','products.image as productimage')
          ->leftjoin('users','users.id','orderlists.user_id')
          ->leftjoin('products','products.id','orderlist.product_id')
          ->where('order_code',$ordercode)
          ->get();
          return view('admin.users.oederlist',compact('orderlist'));
    }
}

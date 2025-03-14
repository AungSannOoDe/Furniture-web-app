<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Order;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Category;
use App\Models\Orderlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

class AuthController extends Controller
{
    public function loginPage(){
        return view('admin.loginPage');
    }
    public function first(){
        $product=Product::get();
        return view('FirstShowing.slideShowing',compact('product'));
    }
    public function Second(){
        return view('FirstShowing.About');
    }
    public function third(){
        return view('FirstShowing.Contact');
    }
    public function registerPage(){
        return view('admin.RegisterPage');
    }
    public function dashboard(){
        $userall=User::get();
        $users=User::where('role','user')->get();
        $admin=User::where('role','admin')->get();
        $success=Order::where('status','1')->get();
        $pending=Order::where('status','0')->get();
        $product=Product::get();
        $Category=Category::get();
        $reviews=Contact::get();
        return view('admin.Dashboard.admindashboard',compact(['users','admin','userall','success','pending','product','Category','reviews']));
    }
    public function posts(){
        return view('user.Post');
    }
    public function gotodashboard(){
        if(Auth::user()->role==="admin"){
            return redirect()->route('admin#dashboard');
        }
        else{
  return redirect()->route('user#index');
        }
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
    public function userlogin(){
        return  view('user.loginPage');
    }
    public function userRegister(){
        return view('user.register');
    }
}

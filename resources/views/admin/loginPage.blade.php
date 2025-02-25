@extends('admin.layouts.Authenation')
@section('Content')
<div class="row justify-content-center">
    <div class="col-md-7 col-lg-5">
        <div class="login-wrap p-4 p-md-5">
    <div class="d-flex">
        <div class="w-100">
            <p onclick="load.history()">back</p>
            <h3 class="mb-4">admin log In</h3>
        </div>
    </div>
            <form action="{{route('login')}}"  method="POST" class="login-form">

                @csrf
        <div class="form-group">
            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-envelope"></span></div>
            <input type="text" class="form-control rounded-left" placeholder="Enter email...." name="email" >
            @error('email')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
    <div class="form-group">
        <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
      <input type="password" class="form-control rounded-left" placeholder="Enter Password..." name="password">
      @error('password')
      <small class="text-danger">{{$message}}</small>
      @enderror
    </div>
    <div class="form-group d-flex align-items-center">
        <div class="w-100">
            <label class="checkbox-wrap checkbox-primary mb-0">Save Password
                          <input type="checkbox" checked>
                          <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="w-100 d-flex justify-content-end">
            <button type="submit" class="btn btn-primary rounded submit">Login</button>
        </div>
    </div>
    <div class="form-group mt-4">
                    <div class="w-100 text-center">
                        <p class="mb-1">Don't have an account? <a href="{{route('admin#register')}}">Sign Up</a></p>
                        <p><a href="#">Forgot Password</a></p>
                    </div>
    </div>
  </form>
</div>

@endsection

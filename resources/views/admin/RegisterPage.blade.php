@extends('admin.layouts.Authenation')
@section('Content')
<div class="row justify-content-center">
    <div class="col-md-7 col-lg-5">
        <div class="login-wrap p-4 p-md-5">
    <div class="d-flex">
        <div class="w-100">
            <h3 class="mb-4">admin Register </h3>
        </div>
    </div>
            <form method="POST"  action="{{ route('register') }}" class="login-form">
                @csrf
                <div class="form-group">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
                    <input type="text" class="form-control rounded-left @error('name')
                    is-invalid
                    @enderror " name="name" :value="{{old('name')}}" placeholder="Username">
@error('name')
    <small class="text-danger">{{ $message}}</small>
@enderror
                </div>
        <div class="form-group">
            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-envelope"></span></div>
            <input type="text" class="form-control rounded-left @error('email') is-invalid  @enderror " placeholder=" Enter Email..." name="email" :value="{{old('email')}}">
            @error('email')
                <small class="text-danger">{{ $message}}</small>
            @enderror
        </div>
    <div class="form-group">
        <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
      <input type="password" class="form-control rounded-left @error('password') is-invalid  @enderror " placeholder=" Enter Password..." name="password">
      @error('password')
      <small class="text-danger">{{ $message}}</small>
  @enderror
    </div>
    <div class="form-group">
        <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
      <input type="password" class="form-control rounded-left @error('password_confirmation') is-invalid  @enderror " placeholder="Confirmation Password...." name="password_confirmation" >
      @error('conpass')
      <small class="text-danger">{{ $message}}</small>
  @enderror
    </div>
    <div class="form-group d-flex align-items-center">
        <div class="w-100">
            <label class="checkbox-wrap checkbox-primary mb-0">I accept the terms
                          <input type="checkbox" name="terms">
                          <span class="checkmark"></span>
                        </label>
                    </div>
                    @error('terms')
                    <small class="text-danger">{{ $message}}</small>
                @enderror
                    <div class="w-100 d-flex justify-content-end">
            <button type="submit" class="btn btn-primary rounded submit">Register</button>
        </div>
    </div>
    <div class="form-group mt-4">
                    <div class="w-100 text-center">
                        <p class="mb-1">If u  have an account<a href="{{route('admin#loginPage')}}">Sign Up</a></p>
                    </div>
    </div>
  </form>
</div>

@endsection

@extends('admin.layouts.app')
@section('Content')
<div id="layoutSidenav_content">
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div><h3 class="text-center font-weight-light my-4">Change password</h3></div>
                        <div class="card-body">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <div class="form-floating mb-3">
                                        <input class="form-control  " id="inputEmail" type="password" value="{{old('oldpassword')}}" name="oldpassword" placeholder="old password"  />
                                        <label for="inputEmail">Old password</label>
                                    </div>
                                    <div class="invalid-feedback">
                                        @error('oldpassword')
                                        {{ $message }}
                                        @enderror

                                    </div>
                                </div>
                            <div class="form-group">
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputPassword" type="password" placeholder=" New password" vlaue="{{old('newpassword')}}" name="newpassword" />
                                    <label for="inputPassword"> New password</label>
                                </div>
                                <div class="invalid-feedback">
                                    @error('newpassword')
                                    {{ $message }}
                                    @enderror

                                </div>
                            </div>

                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                    <button class="btn btn-primary w-100" type="submit">Change password</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

</div>
@endsection

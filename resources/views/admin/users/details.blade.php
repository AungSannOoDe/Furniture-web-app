@extends('admin.layouts.app')
@section('Content')
    <div class="" id="layoutSidenav_content">
     <div class="container ">
        <div class="col-12 mx-auto ">
            <div class="mx-auto mt-4">
    <img src="{{asset('image/user.png')}}" alt="" width="200px" height="200px" style="margin-left:500px ">
    <div class="container">
        <div class="col-6 offset-4">
            <div class="d-flex justify-center mx-auto mt-5" style="column-gap: 120px;">
                @foreach ($user as  $u)

                <div>
                  <h4 class="mt-2">Name</h4>
                  <h4 class="mt-2">Email</h4>
                  <h4 class="mt-2">Adress</h4>
                  <h4 class="mt-2">description</h4>
                </div>
                <div class="text-muted">
                  <h4 class="mt-2">{{$u->name}}</h4>
                  <h4 class="mt-2">{{$u->email}}</h4>
                  <h4 class="mt-2">{{$u->address}}</h4>
                  <h6 class="mt-2">description</h6>
                </div>
              </div>
                    </div>


                </div>
             </div>
             @endforeach
            </div>
        </div>

    </div>

@endsection

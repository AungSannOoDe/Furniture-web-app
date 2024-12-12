@extends('admin.layouts.app')
@section('Content')
<div id="layoutSidenav_content">
    <div class="row">
        <div class="col-12">
          <div class="card">
   <div class="card-header d-flex justify-content-between">
<h2 class="px-2 py-3">User List</h2>

   </div>
   <div class="card-body">
    <div class="d-flex justify-content-end">
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3  mt-3" method="GET" action="{{route('admin#product')}}">
            <div class="input-group">
                @csrf
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" name="key" value="{{request('key')}}" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="submit"><i class="fas fa-search"></i></button>
            </div>
        </form>
    </div>

    <table class="table">
     <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>role</th>
            <th>Created_at</th>
            <th></th>
        </tr>
     </thead>
  <tbody>
    @foreach ($admin as $adm)
    <tr class="">
        <td>{{$adm->name}}</td>
        <td>{{$adm->email}}</td>
        <td>{{$adm->address}}</td>
        <td>
            <select name="" id="" class="form-control w-50 me-2">

                <option value="" @if($adm->role==="admin") selected @endif >
                    admin
                </option>
                <option value="" @if($adm->role==="user") selected @endif>
                    user
                </option>
            </select>
        </td>
        <td>
            {{$adm->updated_at}}
        </td>
        <td>
            <a href="" class="btn btn-success">View Details</a>
            <a href="" class="btn btn-warning">Edit</a>
            <a href="" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    @endforeach

  </tbody>
    </table>
   </div>
          </div>

        </div>
    </div>
</div>
@endsection

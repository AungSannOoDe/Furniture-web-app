@extends('admin.layouts.app')
@section('Content')
<div id="layoutSidenav_content">
    <div class="row">
        <div class="col-12">
          <div class="card">
   <div class="card-header d-flex justify-content-between">
<h2 class="px-2 py-3">User List</h2>
   </div>
   @if(session('delete'))
   <div class="row mt-3">
    <div class="col-5 offset-6 ">
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path
                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
            </symbol>
            <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                <path
                    d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
            </symbol>
            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path
                    d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
            </symbol>
        </svg>
        <div class="alert alert-danger d-flex align-items-between alert-dismissible fade show"
            role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                aria-label="Danger:">
                <use xlink:href="#check-circle-fill" />
            </svg>
            <div>
                {{ session('deleteSuccess') }}
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
   @endif
   <div class="card-body">
    <div class="d-flex justify-content-end">
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3  mt-3" method="GET" action="{{route('admin#users')}}">
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
            <a href="{{route('admin#details',['id'=>encrypt($adm->id)])}}" class="btn btn-success">View Details </a>
            <a href="{{route('admin#user#delete', $adm->id)}}" class="btn btn-danger">Delete</a>
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

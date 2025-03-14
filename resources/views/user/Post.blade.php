@extends('admin.layouts.app')
@section('Content')
<div id="layoutSidenav_content">
<div class="container">
    <div class="row mt-4">
        <div class="col-9 offset-2">
            <h2 class="text-center">Add Blog</h2>
            <form action="{{route('admin#blogs')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title" class="">Name:</label>
                    <input type="text" id="title" class="form-control @error('title')
                        is-invalid
                    @enderror " name="title" placeholder="Enter title....">
                    @error('title')
                    <small class="text-danger">{{$message}}</small>
                @enderror
                </div>
                <div class="form-group mt-5">
                    <label for="image" class="">images:</label>
                   <input type="file" name="image" id="image" class="form-control @error('image')
                       is-invalid
                   @enderror">
                   @error('image')
                       <small class="text-danger">{{$message}}</small>
                   @enderror
                </div>
                <div class="form-group mt-5">
                    <label for="message" class="">Messages:</label>
                    <textarea name="message" id="message" cols="30" rows="10" class="form-control @error('message')
                        is-invalid
                    @enderror " ></textarea>
                    @error('message')
                    <small class="text-danger">{{$message}}</small>
                @enderror
                </div>
                <div class="mt-3">
                    <button class="w-100 btn btn-primary">
                        Add Blog
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection

@extends('admin.layouts.app')
@section('Content')
<div id="layoutSidenav_content">
<div class="container-fluid">
    <div class="row mt-5">
        <div class="col-12">
            <div class="">
                <div class="card px-3 py-2">
   <p onclick="history.back()">back</p>
          <h2 class="text-center">Category Informations</h2>
           <form action="{{route('admin#Cate#update')}}" method="POST" >
            @csrf
            <div class="form-group">
                @foreach ($Category as $c )
                @endforeach
                <label for="Catename">Name</label>
                <input type="text" class="form-control" name="CateName" id="Catename" placeholder="Enter Category Name..." value="{{old('CateName',$c->Cate_name)}}">
            </div>
            <div class="mt-3">
                <button class="btn btn-primary w-100">Update Category Informations</button>
            </div>
           </form>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
@endsection

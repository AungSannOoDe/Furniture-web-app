@extends('admin.layouts.app')
@section('Content')
    <div id="layoutSidenav_content">
        <div class="container">
            @if (session('deleteSuccess'))
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
            @if (session('InsertSuccess'))
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
                                {{ session('InsertSuccess') }}
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
            @endif
            <div class="row mt-5">
                <div class="col-6">
                    <div class="card px-3 py-2">
                        <div>
                            <h2 class="text-lg text-center">Add product</h2>
                        </div>
                        <form action="{{ route('admin#add#product') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name" class="text-muted">Product Name</label>
                                <input type="text"
                                    class="form-control @error('name')
                       is-invalid
                   @enderror "
                                    id="name" name="name" value="{{ old('name') }}"
                                    placeholder="Enter product name...">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <label for="price" class="text-muted">Product price</label>
                                <input type="number"
                                    class="form-control @error('price')
                       is-invalid
                   @enderror "
                                    id="price" name="price" placeholder="Enter product price..."
                                    value="{{ old('price') }}">
                                @error('price')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <label for="price" class="text-muted">image</label>
                                <input type="file"
                                    class="form-control @error('image')
                       is-invalid
                   @enderror "
                                    name="image" id="image" value="{{ old('image') }}"
                                    placeholder="Enter product price...">
                                @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <label for="name" class="text-muted">Select Category</label>
                                <select name="Categories" id="" class="form-control">
                                    <option value="">Select Category</option>
                                    @foreach ($Categories as $Category)
                                        <option value="{{ $Category->id }}">{{ $Category->Cate_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <textarea name="des" id="" cols="30" rows="10"
                                    class="form-control @error('des')
       is-invalid
   @enderror">
{{ old('des') }}
</textarea>
                                @error('des')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <label for="name" class="text-muted">Waiting time</label>
                                <input type="number"
                                    class="form-control @error('waiting')
                        is-invalid
                   @enderror"
                                    name="waiting">
                                @error('waiting')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mt-3 w-100">
                                <button class="btn btn-primary w-100">Add product</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-6 ">
                    <div class="card px-3 py-2">
                        <div>
                            <h2 class="text-center">Avaliability Categories</h2>
                        </div>
                        <div class="d-flex justify-content-around gap-5 mt-3 ">
                            <h3> <a href="{{ route('admin#Categ#search') }}" style="text-decoration: none;">All</a></h3>
                            <div class="align-self-center">
                                <span class="badge text-bg-primary">
                                    {{ count($product) }}
                                </span>
                            </div>
                        </div>
                        @foreach ($Categories as $c)
                            @php
                                $CatCount = App\Models\Product::countCategory($c->id);
                            @endphp
                            @if ($CatCount == 0)
                                <p class=" text-center text-danger ">There is no Categroies avaliability for products</p>
                            @else
                                <div class="d-flex justify-content-around gap-5 mt-3 ">
                                    <a href="{{ route('admin#Categ#search', $c->id) }}" style="text-decoration: none;">
                                        <h3>{{ $Category->Cate_name }}</h3>
                                    </a>
                                    <div class="align-self-center">
                                        <span class="badge text-bg-primary">{{ $CatCount }}</span>
                                    </div>
                                </div>
                            @endif
                        @endforeach

                    </div>
                </div>

            </div>
        </div>
        <div class="row mt-3">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Product list
                </div>
                <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3  mt-5" method="GET" action="{{route('admin#product')}}">
                    <div class="input-group">
                        @csrf
                        <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" name="key" value="{{request('key')}}" />
                        <button class="btn btn-primary" id="btnNavbarSearch" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </form>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>image</th>
                                <th>price</th>
                                <th>Waiting time</th>
                                <th>Category</th>
                                <th>view_count</th>
                                <th>Start date</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
     @if (count($product)==0)
     <tr>
        <td colspan="7">
            <h2 class="text-danger text-center ">There is no result for this search</h2>
        </td>
     </tr>

     @else
     @foreach ($product as $p)
     <tr>
         <td>
             {{ $p->name }}
         </td>
         <td>
             <img src="{{ asset('/storage/image/' . $p->image) }}" alt=""
                 class="img-tumbnail " style="width:60px; height:60px;">
         </td>
         </td>
         <td>
             {{ $p->price }}
         </td>
         <td>
             {{ $p->waiting_time }}
         </td>
         <td>
             {{$p->CatName}}
         </td>
         <td>
             {{ $p->view_count }}
         </td>
         <td>
             {{ $p->updated_at }}
         </td>
         <td>
             <a class="btn btn-primary" href="{{ route('product#edit', $p->id) }}">Edit</a>
             <a class="btn btn-danger" href="{{ route('product#delete', $p->id) }}">Delete</a>
             <a class="btn btn-success" href="{{ route('product#details', $p->id) }}">View</a>
         </td>
     </tr>
 @endforeach
     @endif


                        </tbody>

                    </table>
                </div>
            </div>

        </div>
    </div>
    </div>
@endsection

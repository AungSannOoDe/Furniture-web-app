@extends('admin.layouts.app')
@section('Content')
    <div id="layoutSidenav_content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-body">
                            <div class="ms-2">
                                <p onclick="histroy.back()">back</p>
                            </div>
                            <div class="card-title">
                                <h3 class="text-center title-2">Product Informations</h3>
                            </div>
                            <hr>
                            <form action="{{route('admin#update#product')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">

                                    @foreach ( $products as $p )
                                    <input type="hidden" name="furId" value="{{ $p->id }}">
                                    <div class="col-4 offset-2 mt-5">
                                        <img src="{{ asset('/storage/image/' . $p->image) }}" alt=""
                                            class="img-thumbnail shadow-sm ">
                                        <input type="file" name="image" id=""
                                            class="form-control  mt-2   @error('image') is-invalid @enderror ">
                                        @error('image')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <button class="btn btn-dark text-white mt-4 w-100" type="submit">update
                                            product</button>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="name" class="control-label mb-1">Name</label>
                                            <input type="text" name="furName" id=""
                                                class="form-control @error('furName') is-invalid  @enderror "
                                                aria-required="true" aria-invalid="false" placeholder="Enter name..."
                                                value="{{ old('furName', $p->name) }}">
                                            @error('furName')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="cc-payment" class="control-label mb-1">price</label>
                                            <input id="cc-pament" name="furPrice" type="number"
                                                class="form-control
                @error('furPrice') is-invalid @enderror"
                                                aria-required="true" aria-invalid="false" placeholder="Enter price..."
                                                value="{{ old('furPrice', $p->price) }}">
                                            @error('furPrice')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="cc-payment" class="control-label mb-1">Category</label>
                                            <select name="pizzaCategory" id="" class="form-control">
                                                <option value="">Chose Category</option>
                                                @foreach ($Categories as $c)
                                                    <option value="{{ $c->id }}"
                                                        @if ($c->id == $p->Cate_id) selected @endif>
                                                        {{ $c->Cate_name }}</option>
                                                @endforeach
                                            </select>
                                            @error('pizzaCategory')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="cc-payment" class="control-label mb-1">Description</label>
                                           <textarea name="furDescription" id="" cols="30" rows="10" class="form-control">
                                            {{old('furDescription',$p->descriptions)}}
                                           </textarea>
                                            @error('pizzaDescription')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="cc-payment" class="control-label mb-1">Waiting_time</label>
                                            <input id="cc-pament" name="Waiting" type="number"
                                                class="form-control
                                            @error('Waiting') is-invalid @enderror"
                                                aria-required="true" aria-invalid="false"
                                                placeholder="Enter Waiting..." value="{{old('Waiting',$p->waiting_time)}}">
                                            @error('Waiting')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="cc-payment" class="control-label mb-1">Creating_time</label>
                                            <input id="cc-pament" name="created" type="text"
                                                class="form-control
                                           "
                                                aria-required="true" aria-invalid="false"
                                                placeholder="Enter Creating..." value="{{old('created',$p->created_at)}}" disabled>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

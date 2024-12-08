@extends('admin.layouts.app')
@section('Content')
    <div id="layoutSidenav_content">
        <div class="container">
            <div class="row mt-5">
                <div class="col-12">
                    <div class="card">
                        @foreach ($products as $p)
                        @endforeach
                        <div class="px-3 py-2">
                            <div class="d-flex justify-content-between">
                                <p>
                                    <a href="{{ route('admin#product') }}" style="">
                                        back
                                    </a>
                                </p>
                                <p>
                                    {{ $p->updated_at }}
                                </p>
                            </div>
                            <div class="row px-3 py-2">
                                <div class="col-6">
                                    <div class="d-flex justify-content-center ">
                                        <img src="{{ asset('/storage/image/' . $p->image) }}" alt="" width="450px"
                                            height="400px">
                                    </div>
                                    <div class="d-flex justify-content-between mt-3">
                                        <div>
                                            <h3>Name</h3>
                                            <p class="text-muted">{{ $p->name }}</p>
                                        </div>
                                        <div>
                                            <h3>Category</h3>
                                            <p class="text-muted">{{ $p->Cate_id }}</h3>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between mt-3">
                                        <div>
                                            <h3>Price</h3>
                                            <p class="text-muted text-center">{{ $p->price }} kyats</p>
                                        </div>
                                        <div>
                                            <h3>Waiting time</h3>
                                            <p class="text-muted text-center">{{ $p->waiting_time }} minutes </h3>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center me-5">
                                        <a href="" class="btn btn-warning text-white">Update Your Product Details</a>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="d-flex justify-content-center ">
                                        <p class="align-self-center mt-5">
                                            {{ $p->descriptions }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('user.app')
@section('header')
<div
class="bg-[url('../images/product5.png')] w-full h-[450px] opacity-90 bg-no-repeat bg-cover bg-center object-cover transition-all"
>
<div class="relative">
  <div class="absolute top-[200px] left-[650px]">
    <div class="flex justify-center items-center">
      <div>
        <p class="text-3xl font-bold text-center">Shop</p>
        <div class="mt-3">
          <span class="font-bold">Home</span>
          <span class="font-bold">></span>
          <span>Shop</span>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="w-full bg-orange-100 h-[80px]">
<div class="section-container ">
  <div class="flex justify-between h-12 space-y-6 ">
    <div class="flex justify-between gap-x-14 items-center space-y-6">
      <div class="flex justify-center gap-x-8 space-y-6 ">
        <div class="mt-6">
          <i class="fa-solid fa-list"></i>
        </div>
        <div>
          <i class="fa-solid fa-vector-square"></i>
        </div>
        <div>
          <i class="fa-solid fa-list"></i>
        </div>

        <h2>Filter</h2>
      </div>
      <div >|</div>
      <div>
        <p>Showing 1-16 of 32 results</p>
      </div>
    </div>
    <div class="flex justify-between items-center gap-x-20">
        <div class="flex justify-center">
            <p class="self-center">Show</p>
            <input type="text" class="w-10 h-10 outline-0">
        </div>
        <div class="flex justify-center">
            <p class="self-center">short by</p>
            <select name="" id="sortingOption" class="w-100 h-10 outline-0">
                <option value="">Choose Options..</option>
                <option value="asc">Ascending</option>
                <option value="desc">Descending</option>
            </select>
        </div>
    </div>
  </div>
</div>
</div>
@endsection
@section('Content')
<section class="section-container mt-8">

       @if (count($products)==0)
           <h1 class="text-red-500 text-center text-3xl">There is no products</h1>
       @else
       <div class="w-full   md:grid grid-cols-4  gap-4 p-5 md:p-0">
       @foreach ( $products as $product)
       <div class="sm:mt-4 mt-0 cursor-pointer" id="myList" >
        <input type="hidden" name="" value="{{Auth::user()->id}}" id="userId">
        <input type="hidden" name="" value="{{$product->id}}" id="productId">
        <input type="hidden" name="" value="{{$product->image}}" id="imageName">
        <input type="hidden" name="" value="{{$product->name}}" id="Name">
        <input type="hidden" name="" value="{{$product->price}}" id="Price">
        <input type="hidden" name="" value="1" id="qty">
        <div class="relative">
          <img src="{{asset('storage/image/'.$product->image)}}" class="card-image" alt="">
          <div class="absolute top-3 right-8 bg-red-400  pt-4 pl-3 w-14 h-14 rounded-full">
            <p class="text-white">New</p>
     </div>
        </div>
        <div class="product-card">
            <div class="flex justify-between">
                <div>
                 <h1 class="text-2xl font-bold">{{$product->name}}</h1>
                 <p class="text-neutral-400">{{$product->Cate_id}}</p>
                 <p>{{$product->price}} kyats</p>
                </div>
                <div class="self-center">
                   <a class="border  border-slate-400 px-2 py-3  hover:bg-slate-400 rounded-lg text-white transition-all duration-150 " id="DCart"> Cart</a>
                   <a class="border  border-slate-400 px-2 py-3  hover:bg-slate-400 rounded-lg text-white transition-all duration-150 " href="{{route('user#singleproduct',encrypt($product->id))}}">Details</a>
                </div>
                             </div>
       </div>
       </div>
       @endforeach
    </div>
       @endif
          </section>
@endsection
@push('Ordering')
<script src="{{asset('js/ADproduct.js')}}"></script>
@endpush

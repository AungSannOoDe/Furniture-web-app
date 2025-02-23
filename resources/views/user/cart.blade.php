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
@endsection
@section('Content')
<section class="section-container ">
    <div class="flex justify-center mt-10 gap-12">
      <table class="self-start w-[800px]">
        <thead class="bg-orange-100 text-slate-700">
          <tr>
            <th>
              Image
            </th>
            <th class="px-4 py-4">Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Sub total</th>
            <th>

            </th>
          </tr>
        </thead>
        <tbody>
            @if (count($Cartlist)==0)
                <tr>
                    <th class="text-red-500 text-3xl" colspan="5">There is no Cart Data</th>
                </tr>
            @else
                @foreach ($Cartlist as $cart )
                <tr>
                    <th>
                     <img src="../images/sofa.png" class="w-24 h-24 " alt="">
                    </th>
                    <th class="px-4 py-4 text-slate-400 font-normal">{{$cart->name}}</th>
                    <th class="font-normal">{{$cart->price}} kyats</th>
                    <th class="font-normal">{{$cart->qty}}</th>
                    <th class="font-normal">36000 kyats</th>
                    <th>
                      <i class="fa-solid fa-trash text-orange-300"></i>
                    </th>
                  </tr>
                @endforeach
            @endif

        </tbody>


      </table>
      <div class="w-[300px] h-[300px] bg-orange-100 font-montserrat ">
          <h2 class="font-bold text-3xl text-center  pt-5 ">Cart totals</h2>
          <div class="mt-10"></div>
          <div class="grid grid-cols-5 grid-rows-2 gap-4 ">
            <div class="col-start-4 row-start-1">
              <p class=" font-montserrat">12000.kyats</p>
            </div>
        <div class="col-start-4 row-start-2 text-yellow-600">12000.kyats</div>
        <div class="col-start-2 row-start-1 font-bold font-montserrat ">Subtotal</div>
        <div class="col-start-2 row-start-2 font-bold font-montserrat ">Total</div>
    </div>
      <div class="text-center mt-8">
        <button class="border border-solid border-slate-400 px-3 py-3 rounded-lg transition-all duration-100 hover:bg-slate-400 hover:text-white">Check Out</button>
      </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <section class="mt-16">
    <div class="w-full h-[200px] bg-orange-100 py-16">
<div class="flex justify-around items-center ">
<div class="flex justify-center gap-x-4">
<div>
    <img src="../images/trophy.png" alt="" width="60px" height="60px">
</div>
<div>
<h2 class="font-bold text-xl">High Quality</h2>
<h2 class="brand-text ">crafted from top materials</h2>
</div>

</div>
<div class="flex justify-center gap-x-4">
<div>
    <img src="../images/check-mark.png" alt="" width="60px" height="60px">
</div>
<div>
<h2 class="font-bold text-xl">Warrantly Protection</h2>
<h2 class=" brand-text">Over 2 years</h2>
</div>

</div>
<div class="flex justify-center gap-x-4">
<div>
    <img src="../images/delivery.png" alt="" width="60px" height="60px">
</div>
<div>
<h2 class="font-bold text-xl">Free Shipping</h2>
<h2 class="brand-text ">crafted from top ma</h2>
</div>

</div>
<div class="flex justify-center gap-x-4">
<div>
    <img src="../images/support.png" alt="" width="60px" height="60px">
</div>
<div>
<h2 class="font-bold text-xl">High Quality</h2>
<h2 class="brand-text ">crafted from top materials</h2>
</div>

</div>
</div>

    </div>
      </section>
@endsection

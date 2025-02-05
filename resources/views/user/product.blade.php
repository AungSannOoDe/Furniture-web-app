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
            <input type="text" class="w-100 h-10 outline-0">
        </div>
    </div>
  </div>
</div>
</div>
@endsection
@section('Content')
<section class="section-container mt-8">
    <div class="w-full   md:grid grid-cols-4  gap-4 p-5 md:p-0">
      <div >
        <div class="relative">
          <img src="../images/product2.png" class="card-image" alt="">
          <div class="absolute top-3 right-8 bg-red-400  pt-4 pl-3 w-14 h-14 rounded-full">
            <p class="text-white">-30%</p>
     </div>
        </div>
        <div class="product-card">
          <h1 class="text-2xl font-bold">Syltherine</h1>
          <p class="text-neutral-400">Stylish cafe chair</p>
          <p>Rp 2.500.000</p>
       </div>
       </div>
       <div class="sm:mt-4 md:mt-0">

        <img src="../images/product4.png" class="card-image" alt="">
        <div class="product-card">
          <h1 class="text-2xl font-bold">levsioa</h1>
          <p class="text-neutral-400">Stylish cafe chair</p>
          <p>Rp 2.500.000</p>
       </div>
       </div>
       <div class="sm:mt-4 md:mt-0">
        <div class="relative">
          <img src="../images/product5.png" class="card-image" alt="">
          <div class="absolute top-3 right-8 bg-red-400  pt-4 pl-3 w-14 h-14 rounded-full">
            <p class="text-white">-50%</p>
     </div>
        </div>
        <div class="product-card">
          <h1 class="text-2xl font-bold">lolito</h1>
          <p class="text-neutral-400">Outdoor bar table and stool</p>
          <div class="flex justify-between">
            <p>Rp7.00000</p>
            <del class="text-neutral-400">Rp 14.00000 </del>
          </div>
       </div>
       </div>
       <div class="sm:mt-4 md:mt-0">
        <div class="relative">
          <img src="../images/product8.png" class="card-image" alt="">
          <div class="absolute top-3 right-8 bg-emerald-400  pt-4 pl-3 w-14 h-14 rounded-full">
            <p class="text-white">New</p>
     </div>
        </div>
        <div class="product-card">
          <h1 class="text-2xl font-bold">Grifio</h1>
          <p class="text-neutral-400">Night lamp</p>
          <p>Rp 2.500.000</p>
       </div>
       </div>
       <div class="sm:mt-4 md:mt-0">
        <div class="relative">
          <img src="../images/product8.png" class="card-image" alt="">

        </div>

        <div class="product-card">
          <h1 class="text-2xl font-bold">Mugg</h1>
          <p class="text-neutral-400">Stylish cafe chair</p>
          <p>Rp 2.500.000</p>
       </div>
       </div>
       <div class="sm:mt-4 md:mt-0">
        <div class="relative">
          <img src="../images/products1.png" class="card-image" alt="">
          <div class="absolute top-3 right-8 bg-emerald-400  pt-4 pl-3 w-14 h-14 rounded-full">
            <p class="text-white">New</p>
     </div>
        </div>

        <div class="product-card">
          <h1 class="text-2xl font-bold">Syltherine</h1>
          <p class="text-neutral-400">Stylish cafe chair</p>
          <p>Rp 2.500.000</p>
       </div>
       </div>
       <div class="sm:mt-4 md:mt-0">
        <div class="relative">
          <img src="../images/product8.png" class="card-image" alt="">
          <div class="absolute top-3 right-8 bg-red-400  pt-4 pl-3 w-14 h-14 rounded-full">
                 <p class="text-white">-50%</p>
          </div>
        </div>

        <div class="product-card">
          <h1 class="text-2xl font-bold">Syltherine</h1>
          <p class="text-neutral-400">Stylish cafe chair</p>
          <p>Rp 2.500.000</p>
       </div>
       </div>
       <div class="sm:mt-4 md:mt-0">
        <div class="relative">
          <img src="../images/product8.png" class="card-image" alt="">
          <div class="absolute top-3 right-8 bg-emerald-400  pt-4 pl-3 w-14 h-14 rounded-full">
            <p class="text-white">New</p>
     </div>
        </div>

        <div class="product-card">
          <h1 class="text-2xl font-bold">Syltherine</h1>
          <p class="text-neutral-400">Stylish cafe chair</p>
          <p>Rp 2.500.000</p>
       </div>
       </div>
       <div >
        <div class="relative">
          <img src="../images/product2.png" class="card-image" alt="">
          <div class="absolute top-3 right-8 bg-red-400  pt-4 pl-3 w-14 h-14 rounded-full">
            <p class="text-white">-30%</p>
     </div>
        </div>
        <div class="product-card">
          <h1 class="text-2xl font-bold">Syltherine</h1>
          <p class="text-neutral-400">Stylish cafe chair</p>
          <p>Rp 2.500.000</p>
       </div>
       </div>
       <div class="sm:mt-4 md:mt-0">

        <img src="../images/product4.png" class="card-image" alt="">
        <div class="product-card">
          <h1 class="text-2xl font-bold">levsioa</h1>
          <p class="text-neutral-400">Stylish cafe chair</p>
          <p>Rp 2.500.000</p>
       </div>
       </div>
       <div class="sm:mt-4 md:mt-0">
        <div class="relative">
          <img src="../images/product5.png" class="card-image" alt="">
          <div class="absolute top-3 right-8 bg-red-400  pt-4 pl-3 w-14 h-14 rounded-full">
            <p class="text-white">-50%</p>
     </div>
        </div>
        <div class="product-card">
          <h1 class="text-2xl font-bold">lolito</h1>
          <p class="text-neutral-400">Outdoor bar table and stool</p>
          <div class="flex justify-between">
            <p>Rp7.00000</p>
            <del class="text-neutral-400">Rp 14.00000 </del>
          </div>
       </div>
       </div>
       <div class="sm:mt-4 md:mt-0">
        <div class="relative">
          <img src="../images/product8.png" class="card-image" alt="">
          <div class="absolute top-3 right-8 bg-emerald-400  pt-4 pl-3 w-14 h-14 rounded-full">
            <p class="text-white">New</p>
     </div>
        </div>
        <div class="product-card">
          <h1 class="text-2xl font-bold">Grifio</h1>
          <p class="text-neutral-400">Night lamp</p>
          <p>Rp 2.500.000</p>
       </div>
       </div>
       <div >
        <div class="relative">
          <img src="../images/product2.png" class="card-image" alt="">
          <div class="absolute top-3 right-8 bg-red-400  pt-4 pl-3 w-14 h-14 rounded-full">
            <p class="text-white">-30%</p>
     </div>
        </div>
        <div class="product-card">
          <h1 class="text-2xl font-bold">Syltherine</h1>
          <p class="text-neutral-400">Stylish cafe chair</p>
          <p>Rp 2.500.000</p>
       </div>
       </div>
       <div class="sm:mt-4 md:mt-0">

        <img src="../images/product4.png" class="card-image" alt="">
        <div class="product-card">
          <h1 class="text-2xl font-bold">levsioa</h1>
          <p class="text-neutral-400">Stylish cafe chair</p>
          <p>Rp 2.500.000</p>
       </div>
       </div>
       <div class="sm:mt-4 md:mt-0">
        <div class="relative">
          <img src="../images/product5.png" class="card-image" alt="">
          <div class="absolute top-3 right-8 bg-red-400  pt-4 pl-3 w-14 h-14 rounded-full">
            <p class="text-white">-50%</p>
     </div>
        </div>
        <div class="product-card">
          <h1 class="text-2xl font-bold">lolito</h1>
          <p class="text-neutral-400">Outdoor bar table and stool</p>
          <div class="flex justify-between">
            <p>Rp7.00000</p>
            <del class="text-neutral-400">Rp 14.00000 </del>
          </div>
       </div>
       </div>
       <div class="sm:mt-4 md:mt-0">
        <div class="relative">
          <img src="../images/product8.png" class="card-image" alt="">
          <div class="absolute top-3 right-8 bg-emerald-400  pt-4 pl-3 w-14 h-14 rounded-full">
            <p class="text-white">New</p>
     </div>
        </div>
        <div class="product-card">
          <h1 class="text-2xl font-bold">Grifio</h1>
          <p class="text-neutral-400">Night lamp</p>
          <p>Rp 2.500.000</p>
       </div>
       </div>
       </div>

    </div>
    <!-- paginate -->
        <div class="flex justify-center mt-8">
         <div class="space-x-8 space-y-3">
            <button class="btn">1</button>
            <button class="btn">2</button>
            <button class="btn">3</button>
            <button class="btn w-20">Next</button>
         </div>
        </div>
          </section>
@endsection

@extends('user.app')
@section('Content')
<section class="">
    <div
      class="grid grid-cols-5 grid-rows-5 gap-4 gap-x-8 mt-5 relative right-[73px]"
    >
      <div class="row-span-5 space-y-10 place-items-end">
        <div class="bg-orange-100 px-2 py-4 rounded-lg w-24">
          <img
            src="../images/sofa.png"
            alt=""
            width="80px"
            height="80px"
            class=""
          />
        </div>

        <div class="bg-orange-100 px-2 py-6 rounded-lg w-24">
          <img src="../images/sofa2.png" alt="" width="80px" height="80px" />
        </div>
        <div class="bg-orange-100 px-2 py-6 rounded-lg w-24 h-30">
          <img
            src="../images/sofa4.png"
            alt=""
            width="100px"
            height="80px"
            class="object-cover"
          />
        </div>
        <div class="bg-orange-100 px-2 rounded-lg w-24 h-30">
          <img
            src="../images/sofa3.png"
            alt=""
            width="80px"
            height="0px"
            class="object-center"
          />
        </div>
      </div>
      <div class="col-span-2 row-span-4">
        <div class="w-full bg-orange-100 h-[600px] rounded-lg">
          <img src="../images/sofa.png" alt="" />
        </div>
      </div>
      <div class="col-span-2 row-span-5 col-start-4">
        <div>
          <h2 class="font-normal text-3xl font-montserrat">Asgaard sofa</h2>
          <p class="text-slate-400 text-xl mt-6">Rs.100,000.000</p>
        </div>
        <div class="flex gap-x-4 mt-5">
          <div>
            <i class="fa-solid fa-star text-yellow-400"></i>
            <i class="fa-solid fa-star text-yellow-400"></i>
            <i class="fa-solid fa-star text-yellow-400"></i>
            <i class="fa-solid fa-star text-yellow-400"></i>
            <i class="fa-solid fa-star text-yellow-400"></i>
          </div>
          <div>
            <p>︱</p>
          </div>
          <div>
            <p class="font-normal text-slate-500">5 customer view</p>
          </div>
        </div>
        <div class="w-80">
          <p class="tracking-wider leading-loose">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi
            accusantium ex soluta.
          </p>
        </div>
        <div class="mt-5">
        <p class="text-lg text-slate-400">Size</p>
        <div class="flex gap-x-8">
          <button class="size-btn ">L</button>
          <button class="size-btn">xl</button>
          <button class="size-btn">xxl</button>
        </div>
        </div>
        <div class="mt-5">
          <p class="text-lg text-slate-400">Color</p>
          <div class="flex gap-x-2">
            <div
              class="bg-purple-600 w-9 h-9 rounded-full transition-all duration-100 hover:outline-double outline-4"
            ></div>
            <div
              class="bg-black w-9 h-9 rounded-full transition-all duration-100 hover:outline-double outline-4"
            ></div>
            <div
              class="bg-yellow-800 w-9 h-9 rounded-full transition-all duration-100 hover:outline-double outline-4"
            ></div>
          </div>
          <div class="mt-10">
            <div class="flex gap-x-5">
 <div class="w-32 h-16 border border-black rounded-lg flex">
  <button class="w-8 text-2xl hover:bg-yellow-700 transition-all duration-100 hover:rounded-lg hover:border-0 hover:text-white">+</button>
  <input type="text" class="outline-0 border-0 w-16">
  <button class="w-8 text-2xl hover:bg-yellow-700 transition-all duration-100 hover:rounded-lg hover:border-0 hover:text-white">-</button>
 </div>
 <div>
  <button class="w-44 h-16 border border-black rounded-lg hover:bg-yellow-700 transition-all duration-100 hover:border-0 hover:text-white">Add Cart</button>
 </div>
 <div>
  <button class="w-44 h-16 border border-black rounded-lg hover:bg-yellow-700 transition-all duration-100 hover:border-0 hover:text-white">Compare</button>
 </div>
            </div>
           <div class="mt-12 mb-12">
  <hr>
           </div>
           <!-- sharing -->
           <div class="flex text-slate-400 gap-x-5">
                <div>
                  <p>SKU</p>
                  <p>Category</p>
                  <p>Tags</p>
                  <p>Share</p>
                </div>
 <div>
  <p>:SS01</p>
  <p>: Sofa</p>
  <p>:Sofa ,Chair,Home,Shop</p>
  <p>  <div class="flex gap-x-4 items-end">
    : <i class="fa-brands fa-facebook text-xl text-black "></i>  <i class="fa-brands fa-instagram text-xl text-black"></i>  <i class="fa-brands fa-linkedin text-xl text-black"></i>
  </div>
    </p>
 </div>


           </div>
          </div>
        </div>
      </div>
    </div>

  </section>
    <div class="mt-5 mb-5">
      <hr>
    </div>
    <section class="section-container">
        <div class="flex justify-center gap-x-24">
           <p class="text-2xl text-slate-400  pointer-events-auto" id="description" >Description</p>
           <p class="text-2xl" id="addtional">Additional information</p>
           <p class="text-2xl" id="reviews">Review[5]</p>
        </div>
   <div class="mt-5">
   <p class="text-lg text-slate-300">
     Embodying the raw, wayward spirit of rock ‘n’ roll, the Kilburn portable active stereo speaker takes the unmistakable look and sound of Marshall, unplugs the chords, and takes the show on the road.
   </p>
   <p class="mt-8 text-lg text-slate-300">
     Weighing in under 7 pounds, the Kilburn is a lightweight piece of vintage styled engineering. Setting the bar as one of the loudest speakers in its class, the Kilburn is a compact, stout-hearted hero with a well-balanced audio which boasts a clear midrange and extended highs for a sound that is both articulate and pronounced. The analogue knobs allow you to fine tune the controls to your personal preferences while the guitar-influenced leather strap enables easy and stylish travel.
   </p>
   </div>
   <div class="flex justify-center gap-x-5 mt-10">
     <div class="bg-orange-100 rounded-lg">
       <img src="../images/sofa8.png" alt="" width="1239px" height="398px">
     </div>
     <div class="bg-orange-100 rounded-lg">
       <img src="../images/sofa8.png" alt="" width="1239px" height="398px">

     </div>
   </div>
       </section>
       <div class="mt-10 mb-10">
         <hr>
       </div>
       <section class="section-container">
        <h2 class="text-center text-3xl font-poppins mb-10">Related Product</h2>
      <div  class="w-full   md:grid grid-cols-4  gap-4 p-5 md:p-0">
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
      </div>
      </section>
      @endsection

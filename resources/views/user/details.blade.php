@extends('user.app')
@section('header')
<div
    class="bg-[url('../images/product5.png')] w-full h-[450px] opacity-90 bg-no-repeat bg-cover bg-center object-cover transition-all"
  >
    <div class="relative">
      <div class="absolute top-[200px] left-[650px]">
        <div class="flex justify-center items-center">
          <div>
            <p class="text-3xl font-bold text-center">Product Details</p>
            <div class="mt-3 text-center">
              <span class="font-bold">Home</span>
              <span class="font-bold">></span>
              <span>Details</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('Content')
<section class="mt-10 section-container">
    <div class="flex justify-around ">
      <div class="w-1/6">
       <h2 class="text-2xl">
         Go to product page for more products details
       </h2>
      </div>
      <div>
       <div>
         <div>
           <img src="../images/sofa3.png" alt="" class="w-96 h-80 object-cover object-bottom bg-orange-100 rounded-lg " >
         </div>
   <div class="px-3 py-3 flex flex-col space-y-4">
     <h2 class="font-mono text-2xl">Asangada sofa</h2>
     <h2 class="text-xl ">Rs. 127,0000</h2>
     <div class="flex justify-start gap-x-5 ">
       <div>
         <p>4.7</p>
       </div>
       <div>
         <i class="fa-solid fa-star text-yellow-200 "></i>
         <i class="fa-solid fa-star text-yellow-200 "></i>
         <i class="fa-solid fa-star text-yellow-200"></i>
         <i class="fa-solid fa-star text-yellow-200"></i>
         <i class="fa-solid fa-star text-yellow-200"></i>
       </div>
       <div>
         <p class="text-gray-400">
           | 204 views
         </p>

       </div>
     </div>

   </div>
       </div>


      </div>
      <div>
       <div class="mt-11">
         <h2 class="text-2xl">Add ptroduct</h2>
         <button class="px-3 py-2 border bg-slate-500 text-white rounded-lg mt-7">Choose product</button>
       </div>

      </div>
    </div>
   </section>
   <section class="section-container mt-6">
     <div class="overflow-hidden">
       <table class="min-w-full border-neutral-200 text-center text-sm font-light text-surface dark:border-white/10 dark:text-white">
          <tbody>
           <tr class="  border-t border-neutral-200 w-full ">
             <td
               class="  w-1/2 ps-16 text-left   border-e border-neutral-200  py-4 dark:border-white/10">
              <div>
  <h2 class="font-bold text-xl">General</h2>
  <div class="flex flex-col space-y-8 mt-8">
   <p class="text-xl ">Sales Package</p>
   <p class="text-xl ">Model Number</p>
   <p class="text-xl ">Secondary Number</p>
   <p class="text-xl ">Configuration</p>
   <p class="text-xl ">Uphistroery</p>
   <p class="text-xl ">Uphosotery</p>
  </div>

              </div>

             </td>
             <td
               class="w-1/2  border-neutral-200  dark:border-white/10">
               <h2 class="font-bold text-xl hidden">General</h2>
                <div class="flex flex-col space-y-8 mt-10">
                 <p class="text-xl ">1 section sofa</p>
                 <p class="text-xl ">FECLHEOIU</p>
                 <p class="text-xl ">Solid wood</p>
                 <p class="text-xl ">L-shape</p>
                 <p class="text-xl ">Fabric + Cottom</p>
                 <p class="text-xl ">Bright Grey and Lion</p>
                </div>
             </td>
           </tr>
          </tbody>
       </table>
     </div>

   </section>

@endsection

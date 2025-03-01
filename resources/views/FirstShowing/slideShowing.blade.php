    @extends('FirstShowing.app')
    @section('Content')


      <section class="h-[600px] bg-cover bg-center bg-no-repeat body-font font-montserrat  " style="background-image: url(../images/home.png);">
        <div class="w-full h-full section-container px-5 relative">
          <div class="w-full md:mt-0 md:max-w-sm px-6  py-3  mt-[100px] space-y-2  bg-orange-100 md:absolute  right-0  top-[25%] rounded-md">
            <p>
              <span class="text-sm font-medium" >New Arrival</span>
            </p>
            <p>
              <span class="text-3xl font-bold text-yellow-600" >Discover Our</span>
            </p>
            <p>
              <span class="text-3xl font-bold text-yellow-600" >New Collection</span>
            </p>
            <p class="font-medium">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
            <div class="mt-7">
              <button class="bg-yellow-600 px-7 py-4 text-white">Buy Now</button>
            </div>
          </div>

        </div>

      </section>
      <section class="my-10 section-container font-montserrat">
        <div class="text-center mb-3 space-y-2">
          <h2 class="text-3xl font-bold" >Browse the products</h2>
          <p class="font-medium text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis.</p>
        </div>
  <div class=" w-full md:flex justify-center gap-4 ">
<div>
  <img class="range-card " src="../images/Mask Group.png" alt="">
  <p class="range-card-text">Dinninng</p>
</div>
<div>
  <img  class="range-card" src="../images/Image-living room.png" alt="">
  <p class="range-card-text">living</p>
</div>
<div>
  <img class="range-card"  src="../images/Mask Group-1.png" alt="">
  <p class="range-card-text">Bedroom</p>
</div>
  </div>
      </section>
      <section class="section-container">
<h1 class="text-center text-3xl font-bold py-10">Our products</h1>
<div class="w-full   md:grid grid-cols-4  gap-4 p-5 md:p-0" id="AddProduct">
</div>
<div class=" md:mt-10 sm:mt-3 flex justify-center">
  <button class="border border-solid border-yellow-600 px-8 py-3 text-yellow-600">Show more</button>
</div>

      </section>
      <section class=" max-w-full mt-4 h-full  font-montserrat">
           <div>
            <p class="text-lg text-center font-medium ">Share your setup with</p>
            <h1 class="text-3xl font-bold text-center mt-3">#FurnioFurniture</h1>
           </div>
           <div class=" sm:w-full md:grid grid-cols-3 gap-4 ">
            <div>
              <div class=" md:grid grid-cols-2 gap-2 md:relative  ">
                <div class=" sm:w-full md:absolute left-[-200px] md:w-[274px] md:h-[300px]">
                  <img src="../images/rectangle36.png" alt="" class="w-full h-full">
                </div>
                <div class="sm:w-full md:h-[250px] top-14 md:absolute md:left-[100px] md:w-[400px]">
                  <img src="../images/rectangle38.png" alt="" class=" w-full h-full">
                </div>
              </div>
             <div class="mt-2 md:grid grid-cols-2 relative top-[54%]">
       <div class=" sm:w-full md:absolute left-[-200px] md:h-[406px] md:w-[328px]">
        <img src="../images/rectangle41.png" alt="" class="w-full h-full">
       </div>
                <div class="sm:w-full md:absolute left-[150px] md:h-[242px] md:w-[350px]">
                  <img src="../images/rectangle43.png" alt="" class= "w-full h-full">
                </div>

             </div>

            </div>
            <div class="sm:w-full md:relative top-[7rem] md:h-[570px] md:w-[450px] left-6 ">
              <img src="../images/rectangle40.png" alt=""  class=" w-full h-full">
            </div>
           <div>
            <div class="md:grid grid-cols-2 gap-4 md:relative ">
              <div class="sm:w-full md:w-[260px] md:h-[350px] md:absolute top-14 ">
                <img src="../images/rectangle44.png" alt="" class="w-full h-full">
              </div>
             <div class="sm:w-full md:w-[180px] md:h-[380px] md:absolute right-0">
              <img src="../images/rectangle45.png" alt=""  class="w-full h-full">
             </div>

            </div>
            <div class="md:grid grid-cols-2 gap-4 md:relative top-[74%] ">
              <div class="sm:w-full md:w-[200px]">
                <img src="../images/rectangle41.png" alt=""  class="w-full md:h-[300px]">
              </div>
              <div class="sm:w-full md:absolute left-56 md:w-[190px] md:h-[200px]">
                <img src="../images/rectangle36.png" alt="" class="w-full h-full">
              </div>

            </div>

           </div>
           </div>


      </section >
      @endsection

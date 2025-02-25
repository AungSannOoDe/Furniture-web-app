@extends('FirstShowing.app')
@section('Content')
<section class="section-container mt-14">
    <div>
     <h1 class="font-bold font-montserrat text-3xl text-center">Get In Touch With Us</h1>
       <p class="font-thin text-slate-400 text-center mt-5">For More information About Our Product and Services .Please Feel free to us </p>
       <p class="font-thin text-slate-400 text-center mt-1">An Email.Our Staff always e There To Help You Out.Do Not Hestiable  </p>
    </div>
    <div class="flex justify-center  mt-16">
       <div>

          <div>
             <i class="fa-solid fa-location-dot"></i>
             <h2 class="font-bold font-mono">Address</h2>
             <p class="w-1/2 text-sm text-slate-500">236 5th SE Avenue, New York NY10000, United States</p>
          </div>
          <div class="mt-10">
           <i class="fa-solid fa-phone"></i>
             <h2 class="font-bold font-mono">Phone</h2>
             <p class="w-1/2 text-sm text-slate-500">Mobile: +(84) 546-6789</p>
          </div>
          <div class="mt-10">
           <i class="fa-solid fa-clock"></i>
             <h2 class="font-bold font-mono">Working Time</h2>
             <p class="w-1/2 text-sm text-slate-500">Monday-Friday: 9:00 - 22:00
                 Saturday-Sunday: 9:00 - 21:00</p>
          </div>
       </div>

       <div>
          <form action="{{route('user#add#review')}}" method="POST" class="">
             <div>
                 <label for="name" class="block text-sm text-slate-400">Your Name</label>
                 <input type="text" name="name" id="name" class="h-12 w-96 border block rounded-lg border-slate-700 mt-2 ">
             </div>
             <div class="mt-12">
               <label for="email" class="block text-sm text-slate-400">Your Email</label>
               <input type="text" name="email" id="email" class="h-12 w-96 border block rounded-lg border-slate-700 mt-2 ">
           </div>
           <div class="mt-12">
             <label for="message" class="block text-sm text-slate-400">Message</label>
            <textarea name="message" id="message" class=" w-96 h-24 border block rounded-lg border-slate-700 mt-2"></textarea>
         </div>
 <div class="mt-10">
<button class=" text-white rounded-lg px-5 py-3 bg-yellow-600 ">Send Message</button>
 </div>
          </form>
       </div>
    </div>
 </section>

 <section class="mt-14">
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

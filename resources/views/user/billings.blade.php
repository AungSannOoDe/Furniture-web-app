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
<section class="section-container mt-16">
    <div class="flex justify-around ">
        <div>
           <h2 class="text-2xl font-bold">Billings details</h2>
            <form action="">
                <div class="mt-4">
                    <label for="name">Name</label>
                    <input type="text" class="input_box">
                </div>
                <div class="mt-12">
                    <label for="name">Stress Address</label>
                    <input type="text" class="input_box">
                </div>
                <div class="mt-12">
                    <label for="name">Phone</label>
                    <input type="text" class="input_box">
                </div>
                <div class="mt-12">
                    <label for="name">email
                    </label>
                    <input type="text" class="input_box">
                </div>
                <div class="mt-12">
                    <input type="text" class="input_box" placeholder="Additional information">
                </div>
            </form>
        </div>
        <div>
            <div class="flex justify-between gap-x-72 mt-5 ">
    <div>
        <h2 class="font-bold text-2xl ">Product</h2>
        <p class="text-slate-400 font-normal mt-5">Asagada 1</p>
        <p class="font-normal mt-5">Sub total</p>
        <p class=" font-normal mt-5">Total</p>
    </div>

<div>
<h2 class="font-bold text-2xl  ">Sub total</h2>
<p class=" font-normal mt-5">120000 kyats</p>
<p class="font-normal mt-5">12000 kyats</p>
<p class=" font-normal text-2xl text-yellow-700 mt-5">2500000 kyats</p>
</div>


            </div>
            <div class="mt-6"></div>
            <hr>
            <div class="w-[500px]">
                <p class="flex-wrap text-slate-400">Make your payment directly into  our bank account.Please use  your order
                    ID s the payment eferences.Your order will not be delivered until the funds ave cleared in our account
                </p>
            </div>
            <div class="mt-5">
                <input type="radio" name="" id="">
               <small class="text-slate-400 text-lg">Direct bank transfer </small>
            </div>
            <div class="mt-5">
                <input type="radio" name="" id="">
               <small class="text-slate-400 text-lg">Cash on delivery </small>
            </div>
            <div class="w-[500px] mt-5">
                <p class="flex-wrap text-black">
                    Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <span class="font-bold"> privacy policy.</span>
                </p>
            </div>
            <div class="mt-5 flex justify-center">
                <button class="border px-16 rounded-lg  py-3    border-slate-700">Place Order</button>
            </div>
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

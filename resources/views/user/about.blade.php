@extends('user.app')
@section('header')
    <div
      class="bg-[url('')] w-full h-[450px] opacity-90 bg-no-repeat bg-cover bg-center object-cover transition-all"
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
@endsection

@section('Content')
<section class="section-container mt-14">
    <div class="flex justify-between space-x-24">
        <div class="w-1/2">
         <div >
               <img src="{{asset('images/blog1.jpeg')}}" alt="" class="w-full rounded-lg">
                <p class="font-mono text-sm">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur neque at ex maxime assumenda earum possimus ut ducimus explicabo ab labore expedita, provident officia quibusdam dolore architecto voluptate reprehenderit facilis.
                Possimus iste quae nesciunt, omnis ipsam saepe ducimus quo, dolore praesentium nisi maiores optio, asperiores consequuntur quia neque facere vel veritatis in animi! Debitis quae suscipit quam, nemo voluptate quaerat?
                Itaque odio, praesentium, nemo esse at fugiat incidunt quas omnis hic accusantium delectus amet corporis molestiae labore harum dolore tempore asperiores, eveniet aperiam atque exercitationem animi rem! Magnam, porro sunt?
                veritatis inventore suscipit earum, voluptatibus labore praesentium voluptate nam quidem autem dolor corrupti reprehenderit consectetur, possimus cum natus distinctio. Quisquam, dicta saepe!</p>
         </div>
         <div class="mt-11">
            <img src="{{asset('images/blog1.jpeg')}}" alt="" class="w-full rounded-lg">
             <p class="font-mono text-sm">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur neque at ex maxime assumenda earum possimus ut ducimus explicabo ab labore expedita, provident officia quibusdam dolore architecto voluptate reprehenderit facilis.
             Possimus iste quae nesciunt, omnis ipsam saepe ducimus quo, dolore praesentium nisi maiores optio, asperiores consequuntur quia neque facere vel veritatis in animi! Debitis quae suscipit quam, nemo voluptate quaerat?
             Itaque odio, praesentium, nemo esse at fugiat incidunt quas omnis hic accusantium delectus amet corporis molestiae labore harum dolore tempore asperiores, eveniet aperiam atque exercitationem animi rem! Magnam, porro sunt?
             veritatis inventore suscipit earum, voluptatibus labore praesentium voluptate nam quidem autem dolor corrupti reprehenderit consectetur, possimus cum natus distinctio. Quisquam, dicta saepe!</p>
      </div>
      <div class="mt-11" >
        <img src="{{asset('images/blog1.jpeg')}}" alt="" class="w-full rounded-lg">
         <p class="font-mono text-sm">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur neque at ex maxime assumenda earum possimus ut ducimus explicabo ab labore expedita, provident officia quibusdam dolore architecto voluptate reprehenderit facilis.
         Possimus iste quae nesciunt, omnis ipsam saepe ducimus quo, dolore praesentium nisi maiores optio, asperiores consequuntur quia neque facere vel veritatis in animi! Debitis quae suscipit quam, nemo voluptate quaerat?
         Itaque odio, praesentium, nemo esse at fugiat incidunt quas omnis hic accusantium delectus amet corporis molestiae labore harum dolore tempore asperiores, eveniet aperiam atque exercitationem animi rem! Magnam, porro sunt?
         veritatis inventore suscipit earum, voluptatibus labore praesentium voluptate nam quidem autem dolor corrupti reprehenderit consectetur, possimus cum natus distinctio. Quisquam, dicta saepe!</p>
    <div class="flex justify-start text-slate-400 space-x-6 mt-2">
      <p>Admin</p>
      <p>|</p>
      <p>Hello</p>
      <p>|</p>
      <p>Hello</p>

    </div>

  </div>
        </div>
        <div class="">
            <div class="flex justify-center space-x-7">

                <div>
                    <img src="{{asset('images/blog1.jpeg')}}" alt="" class="w-[80px] h-[80px]">
                </div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, nam?
                 <a href="" class="inline-block">Read More</a>
                </p>
            </div>
            <div class="flex justify-center space-x-7 mt-10">

                <div>
                    <img src="{{asset('images/blog1.jpeg')}}" alt="" class="w-[80px] h-[80px]">
                </div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, nam?
                 <a href="" class="inline-block">Read More</a>
                </p>
            </div>
            <div class="flex justify-center space-x-7 mt-10">

                <div>
                    <img src="{{asset('images/blog1.jpeg')}}" alt="" class="w-[80px] h-[80px]">
                </div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, nam?
                 <a href="" class="inline-block">Read More</a>
                </p>
            </div>
            <div class="flex justify-center space-x-7 mt-10">

                <div>
                    <img src="{{asset('images/blog1.jpeg')}}" alt="" class="w-[80px] h-[80px]">
                </div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, nam?
                 <a href="" class="inline-block">Read More</a>
                </p>
            </div>
            <div class="flex justify-center space-x-7 mt-10">

                <div>
                    <img src="{{asset('images/blog1.jpeg')}}" alt="" class="w-[80px] h-[80px]">
                </div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, nam?
                 <a href="" class="inline-block text-yellow-600">Read More</a>
                </p>
            </div>
            <div class="flex justify-center space-x-7 mt-10">

                <div>
                    <img src="./images/blog1.jpeg" alt="" class="w-[80px] h-[80px]">
                </div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, nam?
                 <a href="" class="inline-block">Read More</a>
                </p>
            </div>

        </div>
    </div>
</section>
<section class="mt-7">
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('images/logo.png')}}" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Home</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <header class="text-gray-600  font-montserrat  bg-white z-[10000]">
        <div class="max-w-7xl mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center ">
          <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0 font-poppins">
            <img src="{{asset('images/logo.png')}}" alt="" width="50px" height="32px">
            <span > <a href="{{route('admin#loginPage')}}" class="ml-3 text-xl">Furnio</a> </span>
          </a>
          <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base gap-x-6 justify-center font-medium">
            <a class="mr-5 hover:text-gray-900 cursor-pointer " href="{{route('user#index')}}">Home</a>
            <a class="mr-5 hover:text-gray-900 cursor-pointer" href="{{route('user#product')}}">Shop</a>
            <a class="mr-5 hover:text-gray-900 cursor-pointer" href="{{route('user#about')}}">about</a>
            <a class="mr-5 hover:text-gray-900 cursor-pointer" href="{{route('user#Contact')}}">Contact us</a>
          </nav>
         <div class="space-x-5">
          <a href="{{route('user#cart')}}">
            <i class="fa-solid fa-cart-shopping"></i>
            </a>
            <a href="{{route('user#login')}}">
                <i class="fa-solid fa-user"></i>
            </a>

         </div>
        </div>
        @yield('header')
      </header>
      @yield('Content')

           <footer class="bg-white mt-56 px-2 py-3">
        <hr>
         <section class="md:flex justify-around mt-3 sm:bg-center">
           <div>
            <h2 class="font-montserrat font-bold sm:text-center">Furnio</h2>
            <p class="mt-5 font-montserrat text-slate-400  md:w-60 sm:text-center">40 University Drive Suite 200 Coral Gables</p>
           </div>
           <div class="sm:bg-center">
              <h2 class="font-montserrat text-slate-400 sm:text-center">links</h2>
               <p class="space-y-5 mt-5 sm:text-center">Home</p>
               <p class="space-y-5 mt-5 sm:text-center">about us</p>
               <p class="space-y-5 mt-5 sm:text-center">Shop</p>
               <p class="space-y-5 mt-5 sm:text-center">Contact</p>
           </div>
           <div class="sm:mt-4">
            <h2 class="font-montserrat text-slate-400 sm:text-center">Help</h2>
            <p class="space-y-5 mt-5 sm:text-center">FAQ</p>
            <p class="space-y-5 mt-5 sm:text-center">Terms & Conditions</p>
            <p class="space-y-5 mt-5 sm:text-center">Policy</p>
           </div>
           <div class="sm:mt-4">
            <h2 class="font-montserrat text-slate-400 sm:text-center">News letter</h2>
            <p class="space-y-5 mt-5 sm:text-center">Subscribe</p>
           </div>
         </section>
      </footer>

</body>
</html>

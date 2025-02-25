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
<body class="">
    <header class="text-gray-600  font-montserrat  bg-white z-[10000] relative">
        <div class="max-w-7xl mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center ">
          <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0 font-poppins">
            <img src="{{asset('images/logo.png')}}" alt="" width="50px" height="32px">

            <span >
                @if (Auth::user()->role=="user")
                <a  class="ml-3 text-xl">Furnio</a>
                @else
                <a href="{{route('admin#loginPage')}}" class="ml-3 text-xl">Furnio</a>
                @endif

                 </span>
          </a>
          <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base gap-x-6 justify-center font-medium">
            <a class="mr-5 hover:text-gray-900 cursor-pointer " href="{{route('user#index')}}">Home</a>
            <a class="mr-5 hover:text-gray-900 cursor-pointer" href="{{route('user#product')}}">Shop</a>
            <a class="mr-5 hover:text-gray-900 cursor-pointer" href="{{route('user#about')}}">about</a>
            <a class="mr-5 hover:text-gray-900 cursor-pointer" href="{{route('user#Contact')}}">Contact us</a>
          </nav>
         <div class="space-x-5">
            <a href="" class="btnCart">
                <i class="fa-solid fa-cart-shopping"></i>
                </a>
                <a href="" class="btnprofile">
                    <i class="fa-solid fa-user"></i>
                </a>

         </div>
        </div>
        <section>
            <div class="w-[450px] bg-white h-[600px] absolute top-0 right-0 px-6 py-6 invisible cart">
                <div class="flex  justify-between">
                    <div>
                        <h1 class="text-2xl font-bold tracking-wider">Shopping   Cart</h1>
                    </div>
                    <h1 class="self-center"><i class="fa-solid fa-xmark" id="remove"></i></h1>
                </div>
                <div class="mt-8  w-48">
                    <hr>
                </div>
                {{-- cart items --}}
               <section>
                @if (count($Carts)==0)
                    <h2 class="text-center text-red-500 mt-5">There is no Cart Data</h2>
                @else
                    @foreach ($Carts as $cart )
                    <div class="flex justify-between mt-5">
                        <div>
                            <img src="{{asset('storage/'.$cart->image)}}" alt="" width="90px" height="90px">
                        </div>
                        <div class="self-center">
                            <h1 class="text-xl font-bold tracking-wider">{{$cart->name}}</h1>
                             <div class="flex justify-center space-x-5 text-xs">
                                <p>{{$cart->qty}}</p>
                                <p>X</p>
                                <p class="text-yellow-600">{{$cart->price}} kyats</p>
                             </div>
                        </div>
                        <div class="self-center">
                            <i class="fa-solid fa-trash"></i>
                        </div>
                    </div>
                    @endforeach
                @endif
               </section>
               <div  class="mt-14">
                  <div class="flex justify-start   space-x-32">
                        <h1 class="text-md font-bold tracking-wider">Total</h1>
                        <h1 class="text-md text-yellow-600 font-bold tracking-wider ml-5"></h1>
                  </div>
               </div>
               <div class="mt-8">
                <hr>
                <div class="mt-8  flex justify-center space-x-14">
      <a class="border px-3 py-2 border-slate-400 rounded-lg hover:bg-slate-400 hover:text-white transition-all duration-300">Cart</a>
      <button class="border px-3 py-2 border-slate-400 rounded-lg hover:bg-slate-400 hover:text-white transition-all duration-300">Checkout</button>
      <button class="border px-3 py-2 border-slate-400 rounded-lg hover:bg-slate-400 hover:text-white transition-all duration-300">Details</button>
                </div>
               </div>
             <div>

             </div>

            </div>
            <div class="w-[150px] h-[150px] bg-white absolute    top-16    left-[89%] px-3 rounded-lg profile invisible">
                <div class="flex justify-end ">
                    <i class="fa-solid fa-xmark" id="removeprofile"></i>
                </div>
                <div class="flex justify-center">
                    <div class="w-[50px] h-[50px] rounded-full bg-yellow-600 "></div>
                </div>
              <h2 class="text-center mt-3">{{Auth::user()->name}}</h2>
               <div class="ml-8">
                <form action="{{route('logout')}}" method="post">
                    @csrf
                    <button type="submit" class="bg-yellow-600 px-2 py-1  text-white  text-center rounded-md hover:bg-white hover:border-yellow-600 duration-150 transition-all ">log out</button>
                </form>

               </div>
            </div>
        </section>
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

<script src="{{asset('js/layout.js')}}">
   @stack('Ordering')
</script>
</html>

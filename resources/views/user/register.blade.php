<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('images/logo.png')}}" type="image/png">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Register form</title>
</head>
<body>
    <section class="section-container flex justify-center items-center h-screen">
        <div class="w-full h-[700px]  bg-white  shadow-xl rounded-lg mt-3 flex justify-center">
                <div class="w-full flex justify-center px-6 py-16">
                    <img src="{{asset('images/furniture.png')}}" alt="" class=" w-full h-[400px] object-cover ">
                </div>
                <div class="w-full  bg-white  ">
                    <div class="px-6">
                        <h1 class="text-3xl font-bold  text-yellow-600">Welcome  to Furino</h1>
                        <form action="{{route('register')}}" method="post">
                            @csrf
                            <div class="mt-3">
                                <label for="name" class="block text-sm font-medium text-yellow-600">Name</label>
                                <input type="text" name="name" id="name" class="w-full px-3 py-2 outline-0 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-yellow-600 focus:border-yellow-600">
                                @error("name")
                                <small class="text-red-500">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="mt-3">
                                <label for="email" class="block text-sm font-medium text-yellow-600">Email</label>
                            <input type="text" name="email" id="email" class="w-full px-3 py-2 outline-0 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-yellow-600 focus:border-yellow-600">
                            @error("email")
                            <small class="text-red-500">{{$message}}</small>
                            @enderror
                        </div>
                            <div class="mt-3">
                                <label for="phone" class="block text-sm font-medium text-yellow-600">phone</label>
                                <input type="text" name="email" id="email" class="w-full px-3 py-2 outline-0 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-yellow-600 focus:border-yellow-600">
                                @error("phone")
                                <small class="text-red-500">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="mt-3">
                                <label for="password" class="block text-sm font-medium text-yellow-600">Password</label>
                                <input type="password" name="password" id="password" class="w-full outline-0 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-yellow-600 focus:border-yellow-600">
                                @error("password")
                                <small class="text-red-500">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="mt-8">
                                <button type="submit" class="w-full  text-yellow-600 py-2 bg-white  rounded-md hover:bg-yellow-600 hover:text-white border border-yellow-600 transition-all duration-300">Sign Up</button>
                            </div>
                            <div class="mt-2">
                                <label for="" class="text-yellow-600">Do yo have account? </label><a href="{{route('user#login')}}"> login</a>
                              </div>
                              <a class="ml-20 cursor-pointer" href="{{route('user#index')}}" >back</a>
                              <div class="flex justify-start space-x-6">
                                <div>
                                    <i class="fa-brands fa-google text-yellow-600  "></i>
                                </div>
                               <div>
                                <i class="fa-brands fa-facebook text-yellow-600"></i>
                               </div>
                               <div>
                                <i class="fa-brands fa-twitter text-yellow-600"></i>
                               </div>
                                 <div>
                                    <i class="fa-brands fa-tiktok text-yellow-600"></i>
                                 </div>
                              </div>
                        </form>
                    </div>

                </div>
        </div>
     </section>
</body>
</html>

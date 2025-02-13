<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('images/logo.png')}}" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>login</title>
</head>
<body>

 <section class="section-container flex justify-center items-center h-screen">

    <div class="w-full h-[600px]  bg-white  shadow-xl rounded-lg mt-3 flex justify-center">

            <div class="w-full flex justify-center px-6 py-6">
                <img src="{{asset('images/furniture.png')}}" alt="" class=" w-full h-[400px] object-cover ">
            </div>
            <div class="w-full  bg-white py-8 ">
                <div class="px-6">
                    <h1 class="text-3xl font-bold  text-yellow-600">Welcome back to Furino</h1>
                    <p class="text-xs font-thin text-slate-400 mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis sed commodi rem aliquam obcaecati necessitatibus quas ut doloremque natus sint.</p>
                    <form action="" method="post">
                        <div class="mt-8">
                            <label for="email" class="block text-sm font-medium text-yellow-600">Email</label>
                            <input type="email" name="email" id="email" class="w-full px-3 py-2 outline-0 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-yellow-600 focus:border-yellow-600" required>
                        </div>
                        <div class="mt-8">
                            <label for="password" class="block text-sm font-medium text-yellow-600">Password</label>
                            <input type="password" name="password" id="password" class="w-full outline-0 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-yellow-600 focus:border-yellow-600" required>
                        </div>
                        <div class="mt-12">
                            <button type="submit" class="w-full  text-yellow-600 py-2 bg-white  rounded-md hover:bg-yellow-600 hover:text-white border border-yellow-600 transition-all duration-300">Login</button>
                        </div>

                        <div class="mt-3">
                            <label for="" class="text-yellow-600">Do yo have account? </label><a href="{{route('user#register')}}"> signup</a>
                          </div>
                          <p class="ml-20 cursor-pointer" onclick="history.back()">back</p>
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


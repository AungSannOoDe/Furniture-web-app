$(document).ready(function(){
    $('#sortingOption').change(function(){
         sorting=$('#sortingOption').val();
         if(sorting=="asc"){
            $.ajax({
        type:'get',
        url:'http://127.0.0.1:8000/user/ajax/list',
        data:{'status':'asc'},
        dataType:'json',
        success: function(response){
            $list='';
            response.forEach(e => {
                 $list+=`  <div class="sm:mt-4 mt-0 cursor-pointer" >
                     <input type="hidden" name="" value="{{Auth::user()->id}}" id="userId">
                    <input type="hidden" name="" value="${response.id}" id="productId">
                    <input type="hidden" name="" value="${response.image}" id="imageName">
                    <input type="hidden" name="" value="${response.name}" id="Name">
                    <input type="hidden" name="" value="${response.price}" id="Price">
                    <input type="hidden" name="" value="1" id="qty">
                    <div class="relative">
                      <img src="{{asset('storage/$response.image}')}}" class="card-image" alt="">
                      <div class="absolute top-3 right-8 bg-red-400  pt-4 pl-3 w-14 h-14 rounded-full">
                        <p class="text-white">New</p>
                 </div>
                    </div>
                    <div class="product-card">
                        <div class="flex justify-between">
                            <div>
                             <h1 class="text-2xl font-bold">${e.name}</h1>
                             <p class="text-neutral-400">${e.Cate_id}</p>
                             <p>${e.price} kyats</p>
                            </div>
                            <div class="self-center">
                               <a class="border  border-slate-400 px-2 py-3  hover:bg-slate-400 rounded-lg text-white transition-all duration-150 "> Cart</a>
                               <a class="border  border-slate-400 px-2 py-3  hover:bg-slate-400 rounded-lg text-white transition-all duration-150 ">Details</a>
                            </div>
                                         </div>
                   </div>
                   </div>`;
            });
            $('#myList').html($list);
        }
    })
         }
         else if(sorting=="desc"){
            $.ajax({
        type:'get',
        url:'http://127.0.0.1:8000/ajax/list',
        data:{'status':'desc'},
        dataType:'json',
        success: function(response){
            $list='';
           response.forEach(e=>{
             $list+=`  <div class="sm:mt-4 mt-0 cursor-pointer" >
                  <input type="hidden" name="" value="{{Auth::user()->id}}" id="userId">
                <input type="hidden" name="" value="${response.id}" id="productId">
                <input type="hidden" name="" value="${response.image}" id="imageName">
                <input type="hidden" name="" value="${response.name}" id="Name">
                <input type="hidden" name="" value="${response.price}" id="Price">
                <input type="hidden" name="" value="1" id="qty">
                <div class="relative">
                  <img src="{{asset('storage/${product.image}')}}" class="card-image" alt="">
                  <div class="absolute top-3 right-8 bg-red-400  pt-4 pl-3 w-14 h-14 rounded-full">
                    <p class="text-white">New</p>
             </div>
                </div>
                <div class="product-card">
                    <div class="flex justify-between">
                        <div>
                         <h1 class="text-2xl font-bold">${e.name}</h1>
                         <p class="text-neutral-400">${e.Cate_id}</p>
                         <p>${e.price} kyats</p>
                        </div>
                        <div class="self-center">
                           <a class="border  border-slate-400 px-2 py-3  hover:bg-slate-400 rounded-lg text-white transition-all duration-150 "> Cart</a>
                           <a class="border  border-slate-400 px-2 py-3  hover:bg-slate-400 rounded-lg text-white transition-all duration-150 ">Details</a>
                        </div>
                                     </div>
               </div>
               </div>`
           })
            $('#myList').html($list);
        }
    })
         }
    })
    $('#DCart').click(function(){
        $userId=$('#userId').val();
        $productId=$('#productId').val();
        $imageName=$('#imageName').val();
        $PName=$('#Name').val();
        $Price=$('#Price').val();
        $qty=$('#qty').val();
        $.ajax({
            type:'get',
            url:'http://127.0.0.1:8000/ajax/addtoCart',
            data:{
                'userId':$userId,
              'pizzaId':$productId,
              'image':$imageName,
              'count':$qty
            },
            dataType:'json',
            success:function(response){
window.location.href="http://127.0.0.1:8000/user/product";
            }

        })
    })
});

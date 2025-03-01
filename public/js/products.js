
$(document).ready(function(){

    $data={
        'get':"all"
    }
    $.ajax({
        type:'get',
        url:'http://127.0.0.1:8000/productlist',
        dataType:'json',
        data:$data,
    })
  $.ajax({
    type:'get',
    url:'http://127.0.0.1:8000/productlist',
    dataType:'json',
    data:$data,
    success:function(response){
        list='';
        if(response.length==0 || response==null){
            list=`<h1>There is no product</h1>`;
            return ;
        }
       response.forEach(e => {
                list+=`<div class="mt-4" >
        <div class="relative">
          <img src="../images/product2.png" class="card-image" alt="">
          <div class="absolute top-3 right-8 bg-red-400  pt-4 pl-3 w-14 h-14 rounded-full">
            <p class="text-white">-30%</p>
        </div>
        </div>
        <div class="product-card">
          <h1 class="text-2xl font-bold">Syltherine</h1>
          <p class="text-neutral-400">Stylish cafe chair</p>
          <p>Rp 2.500.000</p>
        </div>
        </div>`;
       });
       $('#AddProduct').html(list);
    }
  })
})


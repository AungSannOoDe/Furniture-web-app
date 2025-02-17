
$(document).ready(function(){
    $('#detailsTable').html(`<tr><td colspan="4" class="text-danger">No Data Found</td></tr>`);

  $('#detailsCate').change(function(){
       $value=$(this).val();
       $data={
         'value':$value
       }
       $.ajax({
        type:'GET',
        url:'http://127.0.0.1:8000/ajax/details/showtable',
        data:$data,
        dataType:'json',
       })
  })
    $.ajax({
        type:'GET',
        url:'http://127.0.0.1:8000/ajax/details/showtable',
        dataType:'json',
        success:function(response){
            if(response.length==0){
                $('#detailsTable').html(`<tr><td colspan="2">No Data Found</td></tr>`);
                return;
            }
             $list='';
             for($i=0;$i<response.length;$i++){
                $list+=`<tr><td>${response[$i].id}</td><td>${response[$i].name}</td></tr>`;
             }
                $('#detailsTable').html($list);
        }
    })
})

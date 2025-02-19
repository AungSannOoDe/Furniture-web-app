
$(document).ready(function(){
  $('#detailsCate').change(function(){
       $value=$(this).val();
    if($value==undefined || $value=='' || $value==null){
        $('#detailsTable').html(`<tr class="tr"><td colspan="4" class="text-danger">No Data Found</td></tr>`);
        return;
    }
       $data={
         'value':$value
       }
       $.ajax({
        type:'GET',
        url:'http://127.0.0.1:8000/ajax/details/showtable',
        data:$data,
        dataType:'json',
       })
       $.ajax({
        type:'GET',
        url:'http://127.0.0.1:8000/ajax/details/showtable',
        dataType:'json',
        data:$data,
        success:function(response){
            if(response.length==0){
                $('#detailsTable').html(`<tr ><td colspan="4" class="text-danger">No Data Found</td></tr>`);
                return;
            }
             $list='';
             response.forEach(e => {
                $list+=`<tr class="tr" ><td id="detailsid">${e.id}</td><td>${e.name}</td> <td><a class="btn btn-danger" href="{{route('admin#')}}"></a></td> </tr>`;
             });
                $('#detailsTable').html($list);

        },
        error: function(xhr, status, error) {
            console.error("AJAX Error: ", status, error);
        }
    })

  })

})

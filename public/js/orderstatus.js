$(document).ready(function(){
    $('#status').change(function(){
    $status= $('#status').val();
$.ajax({
    type:'get',
   url: 'http://127.0.0.1:8000/admin/status',
   data:{
    'status':$status,
   },
   dataType:'json',
   success:function(response){
    console.log(response);
 $list='';

    for($i=0;$i<response.length;$i++){
       $month=['January','Feburay','March','April','May','June','July','August','Septmeber','October','November','December'];
    date=new Date(response[$i].created_at);
     $dDate=$month[date.getMonth()]+"-"+date.getDate()+"-"+date.getFullYear();
 if(response[$i].status==0){
    $message=`<select name="status" id="" class="form-control">
                                            <option value="0"
                                               selected
                                            >Pending</option>
                                            <option value="1">Accept</option>
                                             <option value="2">Reject</option>

                                        </select>`;
 }
 if(response[$i].status==1){
    $message=`<select name="status" id="" class="form-control">
                                            <option value="0"

                                            >Pending</option>
                                            <option value="1" selected>Accept</option>
                                             <option value="2">Reject</option>

                                        </select>`;
 }
 if(response[$i].status==2){
    $message=`<select name="status" id="" class="form-control">
                                            <option value="0"

                                            >Pending</option>
                                            <option value="1" >Accept</option>
                                             <option value="2" selected >Reject</option>

                                        </select>`;
 }


    $list+=`
    <tr class="shadow">
                                    <td>${response[$i].user_id}</td>
                                    <td> ${response[$i].user_name} </td>
                                    <td> ${response[$i].order_code}</td>
                                    <td>${$dDate}</td>
                                    <td> ${response[$i].total_price}</td>

                                    <td>
${$message}
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr class="spacer">
                                </tr>

    `;
 }
 $('#dataList').html($list);
 }
})
})
$('#updatestatus').change(function(){
  $statusUpdate= $(this).val();
  parentNode=$(this).parents('tr');
  $orderId=parentNode.find('#orderId').val();
  $data={
            'statusUpdate':$statusUpdate,
            'orderId':$orderId
          };
     $.ajax({
        type:'get',
          url: 'http://127.0.0.1:8000/admin/status/update',
         data:$data,
          dataType:'json',
     })
     location.reload();
})
})

